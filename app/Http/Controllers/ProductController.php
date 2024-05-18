<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  /**
   * Handle an authentication attempt.
   */
  public function getProducts(Request $request)
  {
    $products = Product::all();
    $oldSearchForm = [];
    if ($request->isMethod('post')) {
      $size = $request->size;
      $brand = $request->brand;
      $minRange = $request->minRange;
      $maxRange = $request->maxRange;
      $color = $request->color;
      $formData = [
        'size' => $size,
        'color' => $color,
        'brand' => $brand,
        // 'priceRange' => $priceRange,
        'minRange' => $minRange,
        'maxRange'=> $maxRange,
      ];
      $oldSearchForm = $formData;
      $products = $this->searchProduct($formData);
    } else {
      $products = $this->searchProduct();
    }

    $brandList = $this->getBrandList();

    return view('user.searchProduct', ['products' => $products, 'brandList' => $brandList, 'searchForm' => $oldSearchForm]);
  }

  public function getBrandList() {
    $brandList = Product::select('brand')->distinct()->get();
    return $brandList;
  }

  public function searchProduct($formData = null)
  { 
    $products = Product::with(['quantities']);
    if ($formData && $formData['size'])  {
      $size = $formData['size'];
    // $size = 'L';
      $products->with(['quantities' => function($q) use ($size) {
        $q->where('size', $size);
      }])->whereHas('quantities', function($query) use ($size) {
        $query->where('size', $size);
      });
      
    }

    if ($formData && $formData['brand'])  {
      $brand = $formData['brand'];
      $products->whereIn('brand', $brand);
    }
    
    if ($formData && $formData['color'])  {
        // $color = $formData['color'];
      $color = 'black';
        $products->with(['quantities' => function($q) use ($color) {
          $q->whereIn('color', $color);
        }])->whereHas('quantities', function($query) use ($color) {
          $query->whereIn('color', $color);
        });
        
    }
    if ($formData && $formData['maxRange'] && $formData['minRange']) {
        $minRange = floatval(str_replace(',', '', substr($formData['minRange'], 1)));
        $maxRange = floatval(str_replace(',', '', substr($formData['maxRange'], 1)));
        $products->where('price', '>=', $minRange)
                  ->where('price', '<=', $maxRange);
    }
  
    return $products->get();
  }






}
