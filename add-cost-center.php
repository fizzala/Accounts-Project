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
<body>
  <div class="bg-[#E7E8E9] w-full p-6 sm:p-8">
    <!-- Header -->
<div class="flex justify-between items-start mb-6 relative">
  <div class="flex items-center gap-4">
    <img src="./images/logo.jpeg" alt="Mafkoora Logo" class="w-16 h-16 rounded-full"/>
    <h1 class="text-2xl sm:text-3xl font-semibold text-black leading-tight">Impresso<br> Accounts</h1>
  </div>

  <!-- Logout and Toggle grouped -->
  <div class="absolute right-0 top-5 flex flex-col items-end gap-2 sm:static">
    <a href="#" class="text-red-600 text-md font-medium">Log out</a>
    
    <!-- Toggle button only on small screens -->
    <button id="toggleReports" class="bg-white-600 text-gray-400 border-2 border-gray-400 px-3 py-1 rounded sm:hidden">
      ☰ 
    </button>
  </div>
</div>


    

    <!-- Toggled Report Sidebar (on small screens only) -->
    <div id="reportMenu" class="sm:hidden hidden mb-6">
      <div class="bg-white border border-gray-300 rounded p-4">
        <div class="bg-[#444] text-white font-semibold text-center py-2 rounded mb-4">Report(s)</div>
        <ul class="text-gray-700 space-y-2">
          <li><a href="daily-report.php">Daily Report</a></li>
          <li><a href="detailed-report.php">Detailed Report</a></li>
          <li><a href="cost-centres.php">Cost Centres Report</a></li>
          <li><a href="add-cost.php">Add Cost</a></li>
          <li><a href="add-cost-center.php">Add Cost Center</a></li>
        
        <!-- <div class="flex justify-between py-4">
            <label for="report-date" class="font-medium">From Date</label>
            <select id="report-date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-[70%]">
                <option>Select Date</option>
            </select>
        </div>
        <div class="flex justify-between"><label for="report-date" class="font-medium">To Date</label>
            <select id="report-date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-[70%]">
                <option>Select Date</option>
            </select>
        </div> -->
      </div>
    </div>

    <!-- Main Grid for medium and larger screens -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      

      <!-- Left Content -->
      <div class="overflow-auto col-span-2 grid gap-4 ">
        <div class="flex flex-row justify-between items-end">
          <div class="w-[30%]" >
            <label for="date" class="font-semibold">Add Cost</label>
            <input type="number" id="date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-full">
          </div>
          <div class="w-[40%]" >
            <label for="date" class="font-semibold">Description</label>
            <input type="text" id="date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-full">
          </div>
          <div class="">
            <button class="bg-red-500 border border-gray-400 px-8 py-2 rounded">Save</button>
          </div>
        </div>
        
        <p class="text-lg mt-2 font-medium">Cost Report</p>
        <table class="table-auto w-full text-sm text-left">
            <thead class="bg-yellow-100 font-semibold">
                <tr>
                    <th class="border border-black px-2 md:px-2 py-2">S.No</th>
                    <th class="border border-black px-2 md:px-4 py-2">Cost</th>
                    <th class="border border-black px-2 md:px-4 py-2">Description</th>
                    <th class="border border-black px-2 md:px-4 py-2">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <!-- Add more rows as needed -->
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
                <tr>
                    <td class="border border-black px-3 py-2 h-8"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>
                    <td class="border border-black px-3 py-2"></td>

                </tr>
            </tbody>
        </table>
    </div>

      <!-- Sidebar for larger screens -->
      <div class="hidden sm:block md:col-span-1">
        <div class="flex flex-col justify-start mt-6">
          <div class="bg-[#444] text-white font-semibold text-center py-2 rounded mb-4">Report(s)</div>
          <ul class="text-gray-700 space-y-2">
            <li><a href="daily-report.php">Daily Report</a></li>
            <li><a href="detailed-report.php">Detailed Report</a></li>
            <li><a href="cost-centres.php">Cost Centres Report</a></li>
            <li><a href="add-cost.php">Add Cost</a></li>
            <li><a href="add-cost-center.php">Add Cost Center</a></li>
          </ul>
          
        
        </div>
      </div>

    </div>
  </div>

  <!-- JavaScript to toggle -->
  <script>
    const toggleBtn = document.getElementById('toggleReports');
    const reportMenu = document.getElementById('reportMenu');

    toggleBtn.addEventListener('click', () => {
      reportMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
