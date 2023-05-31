<x-app-layout>
    <div class="w-full">
        <p class="text-xl mb-4">Edit Duty</p>
        <div class="flex justify-end w-full mb-5 relative right-0">
            @include('components.searchbar')
        </div>
        <div class="bg-white border border-slate-300 rounded-xl w-full p-3">
            <form action="{{ route('updateDuty', $duty_rosters->id) }}" method="post">
                @csrf
                <table class="rounded-xl px-4 w-3/6">
                    <tbody >
                        <tr>
                            <td class="px-4 py-2"><label>User Id</label></td>
                            <td class="px-4 py-2"><input type="text" name="user_id" value="{{ $duty_rosters->user_id }}" class="form-control rounded-xl w-2/5 bg-gray-200 border border-slate-400" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>User Name</label></td>
                            <td class="px-4 py-2"><input type="text" name="user_name" value="{{ $duty_rosters->user_name }}" class="form-control rounded-xl w-2/5 bg-gray-200 border border-slate-400" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Week</label></td>
                            <td class="px-4 py-2"><input type="text" name="week" value="{{ $duty_rosters->week }}" class="form-control rounded-xl w-full bg-gray-200 border border-slate-400" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Date</label></td>
                            <td class="px-4 py-2"><input type="date" name="date" value="{{ $duty_rosters->date }}" class="form-control rounded-xl bg-gray-200 border border-slate-400" step=".01" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Status</label></td>
                            <td class="px-4 py-2">
                                <select name="status" id="" value="Choose Status" class="form-control rounded-xl bg-gray-200 border border-slate-400" required>
                                    <option name="status" value="Not Started">Not Started</option>
                                    <option name="status" value="In Progress">In Progress</option>
                                    <option name="status" value="Done">Done</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>Start Time</label></td>
                            <td class="px-4 py-2"><input type="time" name="start_time" value="{{ $duty_rosters->start_time }}" class="form-control rounded-xl w-2/6 bg-gray-200 border border-slate-400" required></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2"><label>End Time</label></td>
                            <td class="px-4 py-2"><input type="time" name="end_time" value="{{ $duty_rosters->end_time }}" class="form-control rounded-xl w-2/6 bg-gray-200 border border-slate-400" required></td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-end px-4 py-2">
                    <div class="px-4">
                        <a href="{{ route('DutyRoster') }}"><input type="button" value="Cancel" class="btn border border-slate-400 bg-gray-400 px-3 py-2 rounded-xl hover:bg-gray-300"></a>
                    </div>
                    <div class="px-4">
                        <input type="submit" value="Save" class="btn btn-success border border-slate-300 bg-emerald-500/80 px-3 py-2 rounded-xl hover:bg-emerald-400/80">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
