<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Reminder;
	
class ReminderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reminders = Reminder::paginate(1);

		return view('reminders.index')->with('reminders', $reminders);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('reminders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreReminderRequest $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Reminder  $reminder
	 * @return Response
	 */
	public function show($reminder)
	{
		return view('reminders.show')->with('reminder', $reminder);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($reminder)
	{
		//$reminder = Reminder::findOrFail($id);
		return view('reminders.edit')->with('reminder', $reminder);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
