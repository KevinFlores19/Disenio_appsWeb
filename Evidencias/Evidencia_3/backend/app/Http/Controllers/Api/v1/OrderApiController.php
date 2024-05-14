<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Customers;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Orders::select('id', 'status', 'notes','data_time','invoice_number','customer_number','customer_id','photo_id')
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'required|string',
            'notes' => 'required|string',
            'data_time' => 'required|string',
            'invoice_number' => 'required|string',
            'customer_number' => 'required|string',
            'customer_name' => 'required|string',
            'fiscal_data' => 'required|string',
            'order_date' => 'required|date',
            'delivery_address' => 'required|string',
        ]);

        // Check if the customer already exists
        $customer = Customers::where('name', $validatedData['customer_name'])
                              ->where('fiscal_data', $validatedData['fiscal_data'])
                              ->first();

        // If the customer doesn't exist, create a new one
        if (!$customer) {
            $customer = Customers::create([
                'name' => $validatedData['customer_name'],
                'fiscal_data' => $validatedData['fiscal_data'],
                'address' => $validatedData['delivery_address'],
            ]);
        }

        // Create the order
        $order = Orders::create([
            'status' => $validatedData['status'],
            'notes' => $validatedData['notes'],
            'data_time' => $validatedData['data_time'],
            'invoice_number' => $validatedData['invoice_number'],
            'customer_number' => $validatedData['customer_number'],
            'customer_id' => $customer->id,
            'photo_id' => 1, // You need to adjust this according to your actual logic
        ]);

        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $invoiceNumber = $request->input('invoiceNumber');
        $customerNumber = $request->input('customerNumber');

        $order = Orders::where('invoice_number', $invoiceNumber)
                      ->where('customer_number', $customerNumber)
                      ->first();

        if ($order) {
            return response()->json([
                'status' => $order->status,
                // Agrega más campos si es necesario
            ]);
        } else {
            return response()->json([
                'error' => 'Order not found',
            ], 404);
        }
    }
    

    //Actualiza los estados de status
    public function update(Request $request, Orders $order)
    {
        // Verificar si el estado actual es "In Process"
        if ($order->status === 'In process') {
            // Cambiar el estado a "In Route"
            $order->update(['status' => 'In route']);
            return response()->json(['message' => 'Order status changed to In Route']);
        } elseif ($order->status === 'Pending') {
            // Cambiar el estado a "In Process"
            $order->update(['status' => 'In process']);
            return response()->json(['message' => 'Order status changed to In Process']);
        } else {
            // Si el estado actual no es "In Process" ni "Pending", retornar un error
            return response()->json(['error' => 'Invalid order status'], 400);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
