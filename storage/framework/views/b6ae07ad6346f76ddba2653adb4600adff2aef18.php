
<?php $__env->startSection('title', 'Create'); ?>
<?php $__env->startSection('content'); ?>
    <div class="w-full max-w-xs">
        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md" method="POST" action="<?php echo e(route('employee.store')); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            <div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700" 
                    for="employee_image">Photo
                        <div class="flex justify-between">
                            <img class="w-20 h-20 rounded-full hover:opacity-80 " src="<?php echo e(url('/css/defaultphoto.png')); ?>" alt="" />
                            <input class="my-0 opacity-0" type="file" name="employee_image" id="employee_image" />
                        </div>
                    </label>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700"
                    for="employee_name">Name</label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                    type="text" name="employee_name" id="employee_name" />
                    <?php $__errorArgs = ['employee_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.App', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH Z:\Project\API\EmployeeNewReact\resources\views/Create.blade.php ENDPATH**/ ?>