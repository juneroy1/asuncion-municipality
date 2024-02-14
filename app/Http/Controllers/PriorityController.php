<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingImage;
use App\OfficialsAdmin;
use App\Update;

class PriorityController extends Controller
{
    public function updatePriority(Request $request){ 
        $priorities = $request->input('priority');
        
        foreach ($priorities as $productId => $priority) {
            $product = Update::find($productId);
            if ($product) {
                $product->priority = $priority;
                $product->save();
            }
        }

        return back()->with('success', 'Priorities updated successfully!');
    }
    public function landingPriority(Request $request){
        $priorities = $request->input('priority');
        
            foreach ($priorities as $productId => $priority) {
                $product = LandingImage::find($productId);
                if ($product) {
                    $product->priority = $priority;
                    $product->save();
                }
            }
    
            return back()->with('success', 'Priorities updated successfully!');
        }

        public function officialsPriority(Request $request){
            $priorities = $request->input('priority');
            
                foreach ($priorities as $productId => $priority) {
                    $product = OfficialsAdmin::find($productId);
                    if ($product) {
                        $product->priority = $priority;
                        $product->save();
                    }
                }
        
                return back()->with('success', 'Priorities updated successfully!');
            }
    //
}
