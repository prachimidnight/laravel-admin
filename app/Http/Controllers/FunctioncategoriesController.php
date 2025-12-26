<?php

namespace App\Http\Controllers;

use App\Models\FunctionCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class FunctionCategoriesController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categories_name' => 'required',
            'categories_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'validation failed', 'errors' => $validator->errors()], 400);
        }

        $data = new FunctionCategories();
        $data->categories_name = $request->input('categories_name');
        $data->categories_date = $request->input('categories_date');
        $data->categories_description = $request->input('categories_description');
        $data->function_tithi = $request->input('function_tithi');
        $data->status = $request->input('status', 1); 
        $data->token = generateToken(10);
        $data->guid = generateToken(30);
        // Don't set created_at and updated_at manually - let timestamps handle it
        // Or if you need specific timezone:
        $data->created_at = Carbon::now('Asia/Kolkata');
        $data->updated_at = Carbon::now('Asia/Kolkata');
        $data->created_by = $request->input('created_by');
        $data->updated_by = $request->input('updated_by');

        if ($data->save()) {
            return response()->json(['status' => 200, 'message' => 'Category created successfully', 'data' => $data]);
        } else {
            return response()->json(['status' => 500, 'message' => 'Failed to create category']);
        }
    }

    // List categories
    public function list(Request $request)
    {
        $valid = Validator::make($request->all(), []);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        }

        $data = [];
        $data['offset'] = $request->input('offset', 0);
        $data['limit'] = $request->input('limit', 10);

        if ($request->has('sortby') && $request->input('sortby') != "" &&
            $request->has('sorttype') && $request->input('sorttype') != "") {
            $data['sortby'] = $request->input('sortby');
            $data['sorttype'] = $request->input('sorttype');
        }

        if ($request->has('search')) {
            $data['search'] = $request->input('search');
        }

        if ($request->has('categories_id') && $request->input('categories_id')) {
            $data['categories_id'] = $request->input('categories_id');
        }

        $categoryModel = new FunctionCategories();
        $categoryResult = $categoryModel->getAllCategories($data);

        return response()->json([
            'status' => 200,
            'count'  => $categoryResult['total'],
            'data'   => $categoryResult['data']
        ]);
    }

    // Update category
    public function update(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'categories_name' => 'required',
            'guid' => 'required'
        ]);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        }

        $updateData = [
            'categories_name' => $request->input('categories_name'),
            'categories_date' => $request->input('categories_date'),
            'categories_description' => $request->input('categories_description'),
            'function_tithi' => $request->input('function_tithi'),
            'updated_by' => $request->input('updated_by'),
            'updated_at' => Carbon::now('Asia/Kolkata')
        ];

        $result = FunctionCategories::where('guid', $request->input('guid'))->update($updateData);

        if ($result) {
            return response()->json(['status' => 200, 'message' => 'Category updated successfully']);
        } else {
            return response()->json(['status' => 400, 'errors' => 'Something went wrong'], 400);
        }
    }

    // Delete category
    public function delete(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'guid' => 'required'
        ]);

        if ($valid->fails()) {
            return response()->json(['status' => 400, 'errors' => $valid->errors()], 400);
        }

        $deleteData = [
            'status' => 0,
            'updated_by' => $request->input('updated_by'),
            'updated_at' => Carbon::now('Asia/Kolkata')
        ];

        $result = FunctionCategories::where('guid', $request->input('guid'))->update($deleteData);

        if ($result) {
            return response()->json(['status' => 200, 'message' => 'Category deleted successfully']);
        } else {
            return response()->json(['status' => 400, 'errors' => 'Something went wrong'], 400);
        }
    }
}