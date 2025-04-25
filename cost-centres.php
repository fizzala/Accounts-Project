<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mafkoora Accounts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    @media (max-width: 300px) {
      .mafkoora {
        font-size: 20px !important;
        background-color: aquamarine;
      }
    }
  </style>
</head>

<body class="bg-[#E7E8E9]">
    <div class="bg-[#E7E8E9] w-full p-6 sm:p-8">
        <!-- Header Section -->
        <div class="flex flex-row sm:flex-row justify-between items-center gap-4 mb-6 relative">
            <div class="flex items-center gap-4">
                <img src="./images/logo.jpeg" alt="Mafkoora Logo" class="w-16 h-16 rounded-full" />
                <a href="index.php"><h1 class="text-2xl sm:text-3xl font-semibold text-black leading-tight">Mafkoora<br> Accounts</h1></a>
                
            </div>
            <a href="#" class="text-red-600 text-md font-medium self-end absolute top-5 right-0">log out</a>
        </div>
        <!-- Report Table -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="overflow-auto gap-4 ">
                <div class="flex flex-row justify-between items-end">
                    <div class="w-[30%]">
                        <label for="date" class="font-semibold">From Date</label>
                        
                        <input type="date" id="date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-full">
                    </div>
                    <div class="w-[30%]">
                        <label for="date" class="font-semibold">To Date</label>
                        <input type="date" id="date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-full">
                    </div>
                    <div class="w-[30%]">
                        <label for="date" class="font-semibold">Cost Centre</label>
                        <select id="report-date" class=" border border-gray-400 rounded p-2 bg-yellow-100 w-full">
                            <option>Select Centre</option>
                        </select>
                    </div>
                </div>
                <p class="text-lg mt-2 font-medium">Daily Report</p>
                <table class="table-auto w-full text-sm text-left">
                    <thead class="bg-yellow-100 font-semibold">
                        <tr>
                            <th class="border border-black px-2 md:px-4 py-2">Date</th>
                            <th class="border border-black px-2 md:px-4 py-2">BILLS</th>
                            <th class="border border-black px-2 md:px-4 py-2">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-black px-3 py-2">250212-001</td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <!-- Add more rows as needed -->
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-black px-3 py-2 h-8"></td>
                            <td class="border border-black px-3 py-2"></td>
                            <td class="border border-black px-3 py-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
            <div class="py-4">
                <div class="flex flex-col gap-4  mt-2">
                    <!-- Chart Placeholder -->
                    <div class="bg-gray-200 h-[75vh] flex items-end justify-between px-2 rounded">
                        <!-- Replace with actual chart later -->
                        <div class="w-3.5 bg-gray-600 h-1/4"></div>
                        <div class="w-3.5 bg-gray-600 h-1/2"></div>
                        <div class="w-3.5 bg-gray-600 h-3/4"></div>
                        <div class="w-3.5 bg-gray-600 h-1/2"></div>
                        <div class="w-3.5 bg-gray-600 h-1/3"></div>
                        <div class="w-3.5 bg-gray-600 h-2/3"></div>
                        <div class="w-3.5 bg-gray-600 h-1/4"></div>
                        <div class="w-3.5 bg-gray-600 h-1/4"></div>
                        <div class="w-3.5 bg-gray-600 h-1/2"></div>
                        <div class="w-3.5 bg-gray-600 h-3/4"></div>
                        <div class="w-3.5 bg-gray-600 h-1/2"></div>
                        <div class="w-3.5 bg-gray-600 h-1/3"></div>
                        <div class="w-3.5 bg-gray-600 h-2/3"></div>
                        <div class="w-3.5 bg-gray-600 h-1/4"></div>
                        <!-- Add more bars as needed -->
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>