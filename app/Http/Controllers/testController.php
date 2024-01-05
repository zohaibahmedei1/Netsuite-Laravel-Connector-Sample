<?php

namespace App\Http\Controllers;
use NetSuite\NetSuiteService;
use Illuminate\Http\Request;
use NetSuite\Classes\CustomerSearchBasic;
use NetSuite\Classes\SearchRequest;
use NetSuite\Classes\SearchMoreWithIdRequest;


class testController extends Controller
{
    function test(){
        $service = app(NetSuiteService::class);
        $search = new CustomerSearchBasic();
        $request = new SearchRequest();
        $request->searchRecord = $search;
        $searchResponse = $service->search($request);
        $pageSize = 5;
        $searchId = $searchResponse->searchResult->searchId;
        $totalRecords = $searchResponse->searchResult->totalRecords;
        $pageSize = $searchResponse->searchResult->pageSize;
        $request = new SearchMoreWithIdRequest();
        $request->searchId = $searchId;
        $request->pageIndex = 1;
        $request->pageSize = $pageSize;
        $searchResponse = $service->searchMoreWithId($request);
        dd($searchResponse);
        // dd('1');
    }
}
