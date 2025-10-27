<?php
namespace App\Http\Controllers;

use App\Models\MeetingCalendar;
use Illuminate\Http\Request;

class MeetingCalendarController extends Controller
{
    public function index()
    {
        $events = MeetingCalendar::latest()->paginate(10);
        return view('admin.meeting_calendars.index', compact('events'));
    }

    public function create()
    {
        return view('admin.meeting_calendars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'from_date'  => 'required|date',
            'to_date'  => 'required|date',
            'color' => 'nullable|string|max:20'
        ]);

        MeetingCalendar::create($request->all());

        return redirect()->route('meeting-calendars.index')
                         ->with('success', 'Event created successfully.');
    }

    public function edit(MeetingCalendar $meetingCalendar)
    {
        return view('admin.meeting_calendars.edit', compact('meetingCalendar'));
    }

    public function update(Request $request, MeetingCalendar $meetingCalendar)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'from_date'  => 'required|date',
            'to_date'  => 'required|date',
            'color' => 'nullable|string|max:20'
        ]);

        $meetingCalendar->update($request->all());

        return redirect()->route('meeting-calendars.index')
                         ->with('success', 'Event updated successfully.');
    }

    public function destroy(MeetingCalendar $meetingCalendar)
    {
        $meetingCalendar->delete();

        return redirect()->route('meeting-calendars.index')
                         ->with('success', 'Event deleted successfully.');
    }
}
