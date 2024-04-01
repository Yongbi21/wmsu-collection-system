<div>
    <x-loading-indicator/>
    <main class="p-9 sm:ml-64 pt-20 sm:pt-8 h-auto">
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-1">


            <div class="mx-5 px-3 ">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <!-- Breadcrumb -->
                    <nav class="flex px-5 py-3 text-gray-700" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <span class="inline-flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                    </svg>
                                    Home
                                </span>
                            </li>
                            <li aria-current="page">
                                <a href="{{ route('csc-payments')}}" class="flex items-center">
                                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400">Payments</span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <!--End Breadcrumb -->
                    
                    <div class="col">
                        <div class="flex flex-wrap items-center justify-between mt-3 px-4 p-2">
                            <h6 class="font-bold text-base text-gray-700 uppercase">Academic Year {{$page_info->school_year}}</h6>
                            <button type="button" 
                           data-modal-toggle="downloadexportmodal" data-modal-target="downloadexportmodal" class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none
                             focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                             <svg class="w-6 h-6 mr-2 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                              </svg>                              
                            Download Export
                        </button>

                        </div>
                        <div class=" flex flex-wrap items-center justify-start px-4">
                            <span class="font-semibold text-gray-700 uppercase ">{{$page_info->college_name}}</span>
                        </div>
                    </div>

                    <!--Table Header -->
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 -mb-10">
                        <div class="w-full md:w-3/4 flex">
                            <div class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" wire:model.live.debounce.500ms="filters.search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search " required="">
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="flex items-center space-x-3 w-full md:w-auto">
                                    <select id="filterFee" name="filterFee" wire:model.live="filters.search_by" wire:change="updateSearchDefault()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        @foreach ($search_by as $key=> $value)
                                            <option  value="{{$value}}" >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
                        
                            {{-- Payment Status Filter --}}

                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.status_search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter Status</option>
                                @foreach($status as $key =>$value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.year_level_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter Year</option>
                                @foreach($year_levels as $key =>$value)
                                        <option value="{{$value->id}}">{{$value->year_level}}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.department_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter course</option>
                                @foreach ( $department_data as $department)
                                    <option value="{{ $department->id }}">{{ $department->code }}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.semester_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Select semester</option>
                                @foreach($semesters as $key =>$value)
                                        <option value="{{$value->id}}">{{$value->semester.'  ('.$months[$value->date_start_month-1]['month_name'].' '.$value->date_start_date.' - '.$months[$value->date_end_month-1]['month_name'].' '.$value->date_end_date.')'}}</option>
                                @endforeach
                            </select>
                        </div>    

                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">#</th>
                                    <th scope="col" class="px-4 py-3">Student ID</th>
                                    <th scope="col" class="px-4 py-3">Student Name</th>
                                    <th scope="col" class="px-4 py-3">Student Email</th>
                                    <th scope="col" class="px-4 py-3">Department</th>
                                    <th scope="col" class="px-4 py-3">Semester</th>
                                    <th scope="col" class="px-4 py-3">Yr. Level</th>
                                    <th scope="col" class="px-4 py-3 text-center">Payment Status</th>
                                    <th scope="col" class="px-4 py-3 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>         
                                @foreach ($enrolled_students_data as $key =>$value)              
                                    <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{($enrolled_students_data->currentPage()-1)*$enrolled_students_data->perPage()+$key+1 }}</th>
                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$value->student_code}}</th>
                                        <td class="px-4 py-3">{{ $value->first_name. ' ' .$value->middle_name.' ' .$value->last_name }}</td>
                                        <td class="px-4 py-3"> {{$value->email}}</td>
                                        <td class="px-4 py-3"> {{$value->department_code}}</td>
                                        <td class="px-4 py-3"> {{$value->semester}}</td>
                                        <td class="px-4 py-3"> {{$value->year_level}}</td>
                                        <td class="px-4 py-3 text-center"> 
                                            @if($value->payment_status == 'Partial')
                                                <span class="bg-blue-100 text-blue-800 text-base font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-500">
                                                    Partial
                                                </span>
                                            @elseif($value->payment_status == 'Paid')
                                                <span class="bg-green-100 text-green-800 text-base font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">
                                                    Paid
                                                </span>
                                            @elseif($value->payment_status == 'Unpaid')
                                                <span class="bg-red-100 text-red-800 text-base font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-red-400 border border-red-100 dark:border-red-500">
                                                    Unpaid
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex justify-center items-center space-x-4">
                                                <a href="@if(Route::is('csc-payments'))  /csc/payments/{{$value->id}}/{{$value->semester_id}} @else /csc/collector/payments/{{$value->id}}/{{$value->semester_id}} @endif  ">
                                                    <button type="button" 
                                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none
                                                     focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                     <svg class="w-4 h-4 mx-1 mr-3 text-white-800 dark:dark-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                                                    </svg>
                                                    Payment
                                                </button>
                                            </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                
                    </div>
                </div>
                <div class="row my-2"></div>
                {{ $enrolled_students_data->links() }}
            </div>

            {{-- Modals  --}}

            <div wire:ignore.self id="downloadexportmodal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 max-h-full w-2/4">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-400">
                        <button type="button"  class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                        data-modal-hide="downloadexportmodal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5" id="to_print">
                            <div class="flex items-center p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Export Payment
                                </h3>
                            </div>
                        </div>

                        




                        <div class="grid gap-6 mb-6 md:grid-cols-1 w-full">
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.status_search"
                                class="mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter Status</option>
                                @foreach($status as $key =>$value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.year_level_id"
                                class="mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter Year</option>
                                @foreach($year_levels as $key =>$value)
                                        <option value="{{$value->id}}">{{$value->year_level}}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.department_id"
                                class="mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Filter course</option>
                                @foreach ( $department_data as $department)
                                    <option value="{{ $department->id }}">{{ $department->code }}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course" wire:model.live="filters.semester_id"
                                class="mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="" >Select semester</option>
                                @foreach($semesters as $key =>$value)
                                        <option value="{{$value->id}}">{{$value->semester.'  ('.$months[$value->date_start_month-1]['month_name'].' '.$value->date_start_date.' - '.$months[$value->date_end_month-1]['month_name'].' '.$value->date_end_date.')'}}</option>
                                @endforeach
                            </select>
                        </div>  
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <select id="course" name="course"
                            class="mx-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option  value selected> Export PDF </option>
                              <option value=> Export CSV  </option>
                              <option value=> Export Excel </option>
                            </select>
                            </div>   
                </div>
                    
                    <div class="mt-auto flex items-center justify-end dark:border-gray-600 p-2 m-5 pb-3">
                        <button type="button" data-modal-toggle="downloadexportmodal" class="text-dark-700 hover:text-dark border border-dark-700
                             hover:bg-dark-800 font-bold py-2 px-3 rounded">
                          Back
                         </button>

                        <button type="submit" class=" mx-2 text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Download Receipt
                        </button>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
</div>
