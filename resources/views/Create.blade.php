@extends('Layouts.App')
@section('title', 'Create')
@section('content')
    <div class="w-full max-w-xs">
        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md" method="POST" action="{{ route('employee.store') }}">
            @csrf
            @method('POST')
            <div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700" 
                    for="employee_image">Photo
                        <div class="flex justify-between">
                            <img class="w-20 h-20 rounded-full hover:opacity-80 " src="{{url('/css/defaultphoto.png')}}" alt="" />
                            <input class="my-0 opacity-0" type="file" name="employee_image" id="employee_image" />
                        </div>
                    </label>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_name">Name</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                    type="text" name="employee_name" id="employee_name" />
                    @error('employee_name')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_email">Email</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                    type="text" name="employee_email" id="employee_email">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_title">Title</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                    type="text" name="employee_title" id="employee_title">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_department">Department</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    type="text" name="employee_department" id="employee_department">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_status">Status</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    type="text" name="employee_status" id="employee_status">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_role">Role</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    type="text" name="employee_role" id="employee_role">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_salary">Salary</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    type="text" name="employee_salary" id="employee_salary">
                </div>
                <div class="">
                    <a class="" href="/">Cancel</a>
                    <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" 
                    type="submit">Create</button>
                </div>
            </div>
        </form>
        
    </div>
@endsection