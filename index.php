
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="bg-gray-200 w-full min-h-screen flex items-center justify-center">
            <div class="w-full py-8">
                <div class="flex items-center justify-center space-x-2">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                    </svg> -->
                    <h1 class="text-3xl font-bold text-blue-600 tracking-wider">Banquet Hall Enrollment</h1>
                </div>
                <div class="bg-white w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-4 mx-auto px-16 py-4 rounded-lg shadow-2xl">

                   

                    <form method="POST" action="banquet_data.php" class="my-8 text-sm">




                        <h1>PROPERTIY DETAILS</h1>
                        <div class="flex flex-col my-4">
                            <label for="vendor_name" class="text-gray-700">vendor Name</label>
                            <input type="text" name="vendor_name" id="vendor_name" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Enter Vendor name">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="contact_person_name" class="text-gray-700">Contact Person Name</label>
                            <input type="text" name="contact_person_name" id="contact_person_name" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Enter your email">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="contact_person_mobile" class="text-gray-700">Contact Person Mobile</label>
                            <input type="number" name="contact_person_mobile" id="contact_person_mobile" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Enter your email">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="banquet_hall_name" class="text-gray-700">Name of Banquet Hall</label>
                            <input type="text" name="banquet_hall_name" id="banquet_hall_name" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Name of Banquet Hall">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="address_state" class="text-gray-700">State</label>
                            <input type="text" name="address_state" id="address_state" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="State">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="address_district" class="text-gray-700">District</label>
                            <input type="text" name="address_district" id="address_district" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="District">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="location" class="text-gray-700">Location</label>
                            <input type="text" name="location" id="location" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Location">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="name" class="text-gray-700">Address</label>
                            <input type="text" name="name" id="name" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Address">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="address_locality" class="text-gray-700">Locality</label>
                            <input type="text" name="address_locality" id="address_locality" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Locality">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="address_pin" class="text-gray-700">Pin Code</label>
                            <input type="number" name="address_pin" id="address_pin" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Pin Code">
                        </div>

                        <!-- <div class="my-4 flex items-center justify-end space-x-4">
                            <button class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">NEXT</button>
                        </div> -->

<legend></legend>







                        <h1>SPECIFICATION</h1>

                        <div class="flex flex-col my-4">
                            <label for="size" class="text-gray-700">Size</label>
                            <input type="number" name="size" id="size" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Size">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="guest_capacity" class="text-gray-700">Guest Capacity</label>
                            <input type="number" name="guest_capacity" id="guest_capacity" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Guest Capacity">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="no_of_halls" class="text-gray-700">No. of Halls</label>
                            <input type="number" name="no_of_halls" id="no_of_halls" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Halls">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="no_of_rooms" class="text-gray-700">No. of Rooms</label>
                            <input type="number" name="no_of_rooms" id="no_of_rooms" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Rooms">
                        </div>
                       
                        <div class="flex flex-col my-4">
                            <label for="no_of_lawns" class="text-gray-700">No. of Lawns</label>
                            <input type="number" name="no_of_lawns" id="no_of_lawns" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="parking" class="text-gray-700">parking</label>
                            <input type="number" name="parking" id="parking" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="catering" class="text-gray-700">catering</label>
                            <input type="number" name="catering" id="catering" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="decorative" class="text-gray-700">decorative</label>
                            <input type="number" name="decorative" id="decorative" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>

                        <!-- <div class="my-4 flex items-center justify-end space-x-4">
                            <button class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">NEXT</button>
                        </div> -->







                        <legend><h1>TYPE</h1>  </legend>
                        <div class="flex flex-col my-4">
                         <label for="event_type" class="text-gray-700">Event Type</label>
                            <input type="text" name="event_type" id="event_type" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>
                      

                        <!-- <div class="my-4 flex items-center justify-end space-x-4">
                            <button class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">NEXT</button>
                        </div> -->






                        <h1>PRICING</h1>
                        <div class="flex flex-col my-4">
                            <label for="pricing_by_day_basis" class="text-gray-700">Pricing By Day Basis</label>
                            <input type="number" name="pricing_by_day_basis" id="pricing_by_day_basis" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="pricing_by_event_basis" class="text-gray-700">Pricing By Event Basis</label>
                            <input type="number" name="pricing_by_event_basis" id="pricing_by_event_basis" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>


                        <!-- <div class="my-4 flex items-center justify-end space-x-4">
                            <button class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">NEXT</button>
                        </div> -->




                        


                        <h1>PICTURES</h1>
                        <div class="flex flex-col my-4">
                            <label for="picture1" class="text-gray-700">picture1</label>
                            <input type="file" name="picture1" id="picture1" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div> <div class="flex flex-col my-4">
                            <label for="picture2" class="text-gray-700">picture2</label>
                            <input type="file" name="picture2" id="picture2" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div> <div class="flex flex-col my-4">
                            <label for="picture3" class="text-gray-700">picture3</label>
                            <input type="file" name="picture3" id="picture3" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div> <div class="flex flex-col my-4">
                            <label for="picture4" class="text-gray-700">picture4</label>
                            <input type="file" name="picture4" id="picture4" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="No. of Conferance Hall">
                        </div>

                      
                        
                        
                            <div class="my-4 flex items-center justify-end space-x-4">
                            <button class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>