<?php

namespace App\Http\Controllers;
use App\Models\EWaste;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    public function manageOrder()
    {
        $Ewastes = EWaste::paginate(6);

        return view('manageOrder', ['Ewastes' => $Ewastes]);
    }

    public function processOrder($id)
    {
        $ewaste = EWaste::findOrFail($id);
        $ewaste->status = 'in_progress';
        $ewaste->save();

        return redirect()->route('manage.Order')->with('success', 'Order status updated to In Progress');
    }

    // Method to complete the order
    public function completeOrder($id)
    {
        $ewaste = EWaste::findOrFail($id);
        $ewaste->status = 'completed';
        $ewaste->save();

        return redirect()->route('manage.Order')->with('success', 'Order status updated to Completed');
    }


    public function deleteOrder($id)
{
    $ewaste = EWaste::findOrFail($id);
    $ewaste->delete();

    $ewastes = EWaste::where('id', '>', $id)->orderBy('id')->get();

    foreach ($ewastes as $index => $ewaste) {
        $ewaste->id = $id + $index;
        $ewaste->save();
    }

    $nextId = EWaste::max('id') + 1;
    DB::statement("ALTER TABLE ewasteorders AUTO_INCREMENT = $nextId");

    return redirect()->route('manage.Order')->with('success', 'Order deleted and IDs reindexed successfully');
}

}
