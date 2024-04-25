<form action="{{ route('attendance.submit') }}" method="POST">
    @csrf
	{{-- TODO --}}
    <input type="hidden" name="class_id" value="{{ $courseId }}">
    <button type="submit">Submit Attendance</button>
</form>