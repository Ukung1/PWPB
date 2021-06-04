@extends('Layouts.App')
@section('title', 'Table')
@section('content')
    <div>
        <div class="flex items-center justify-between mb-6">
            <div class=" relative text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" 
                type="search" name="search" placeholder="Search">
                <button class="absolute right-0 top-0 mt-0.5 mr-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="sumbit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" /></svg>
                </button>
            </div>
            <div>
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" 
                href="/Create">Add</a>
            </div>
        </div>
                
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                    <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Salary</th>
                                    <th scope="col"
                                    class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($employees as $employee)
                                    <tr class="hover:bg-gray-100 ">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    @if (!$employee->employee_image)
                                                        <img class="h-10 w-10 rounded-full" src="{{url('/css/defaultphoto.png')}}" alt="" />
                                                    @else
                                                        <img class="h-10 w-10 rounded-full" src="{{ asset($employee->employee_image) }}" alt="" />
                                                    @endif
                                                </div>
                                            
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $employee->employee_name }}</div>
                                                    <div class="text-sm text-gray-500">{{ $employee->employee_email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div>
                                                <div class="text-sm text-gray-900">{{ $employee->employee_title  }}</div>
                                                <div class="text-sm text-gray-500">{{ $employee->employee_department }}</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $employee->employee_status }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $employee->employee_role }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $employee->employee_salary }}</td>
                                        <td>
                                            <a class="text-indigo-600 hover:text-indigo-900" href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                                            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="bg-blue-600" type="submit">d</button>
                                            </form>
                                        </td>      
                                @endforeach
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>          
    </div>
    
@endsection