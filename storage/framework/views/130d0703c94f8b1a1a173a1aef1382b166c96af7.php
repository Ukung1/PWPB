
<?php $__env->startSection('title', 'Edit'); ?>
<?php $__env->startSection('content'); ?>
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="<?php echo e(route('employee.update', $employee->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" 
                    for="employee_image">Photo
                    <div class="flex justify-between">
                        <img class="h-20 w-20 rounded-full hover:opacity-80 " src="<?php echo e(url('/css/defaultphoto.png')); ?>" alt="" />
                        <input class="opacity-0 my-0" type="file" name="employee_image" id="employee_image" value="employee_image"/>
                    </div>
                </label>
                    
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_name">Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    type="text" name="employee_name" id="employee_name" value="<?php echo e($employee->employee_name); ?>" />
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    type="text" name="employee_email" id="employee_email" value="<?php echo e($employee->employee_email); ?>">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_title">Title</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    type="text" name="employee_title" id="employee_title" value="<?php echo e($employee->employee_title); ?>">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_department">Department</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="employee_department" id="employee_department" value="<?php echo e($employee->employee_department); ?>">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_status">Status</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="employee_status" id="employee_status" value="<?php echo e($employee->employee_status); ?>">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_role">Role</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="employee_role" id="employee_role" value="<?php echo e($employee->employee_role); ?>">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_salary">Salary</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="employee_salary" id="employee_salary" value="<?php echo e($employee->employee_salary); ?>">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" 
                    for="employee_image">Photo</label>
                    <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                        <div class="absolute">
                            <div class="flex flex-col items-center "> 
                                <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> 
                                <span class="block text-gray-400 font-normal">Attach you files here</span> 
                                <span class="block text-gray-400 font-normal">or</span> 
                                <span class="block text-blue-400 font-normal">Browse files</span> 
                            </div>
                        </div>
                    </div><input class="h-full w-full opacity-0" type="file" name="employee_image" id="employee_image" />                    
                </div>
                <div class="">
                    <a class="" href="/">Cancel</a>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit">Create</button>
                </div>
            </div>
        </form>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.App', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\Project\API\EmployeeNew\resources\views/Edit.blade.php ENDPATH**/ ?>