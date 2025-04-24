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
  <div class="bg-[#E7E8E9] w-full  p-6 sm:p-8">
    <!-- Header Section -->
    <div class="flex flex-row sm:flex-row justify-between items-center gap-4 mb-6 relative">
      <div class="flex items-center gap-4">
        <img src="./images/logo.jpeg" alt="Mafkoora Logo" class="w-16 h-16 rounded-full"/>
        <h1 class="text-2xl sm:text-3xl mafkoora font-semibold text-black leading-tight">Impresso <br> Accounts</h1>
      </div>
      <div class="absolute right-0 top-5 flex flex-col items-end gap-2 sm:static">
        <a href="#" class="text-red-600 text-md font-medium">Log out</a>
        
        <!-- Toggle button only on small screens -->
        <button id="toggleReports" class="bg-white-600 text-gray-400 border-2 border-gray-400 px-3 py-1 rounded sm:hidden">
          ☰ 
        </button>
      </div>
    </div>
    <div id="reportMenu" class="sm:hidden hidden mb-6 ">
      <div class="bg-white border border-gray-300 rounded p-4 my-5">
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


    <!-- Logos Row -->
    <div class="hidden sm:block md:col-span-1">
    <div class="flex flex-wrap justify-center gap-4 mb-8">
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
      <img src="images/logo.jpeg" class="w-14 h-14 rounded-full border-2 border-white shadow-md" />
    </div>
    </div>

    <!-- Main Form Area -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-4">
      <!-- Form Left -->
      <div class="col-span-2 grid gap-4">
        <div class="grid grid-cols-4 items-center gap-2">
          <label class="col-span-1 text-gray-600 font-semibold">DATE</label>
          <select class="col-span-3 border border-gray-400 px-2 py-1 rounded">
            <option>Select Date</option>
          </select>
        </div>
        <div class="grid grid-cols-4 items-center gap-2">
          <label class="col-span-1 text-gray-600 font-semibold">BILL NO</label>
          <input type="text" class="col-span-3 border border-gray-400 px-2 py-1 rounded" />
        </div>
        <div class="grid grid-cols-4 items-center gap-2">
          <label class="col-span-1 text-gray-600 font-semibold">COST CENTRE</label>
          <select class="col-span-3 border border-gray-400 px-2 py-1 rounded">
            <option>Select Cost Centre</option>
          </select>
        </div>
        <div class="grid grid-cols-4 items-center gap-2">
          <label class="col-span-1 text-gray-600 font-semibold">AMOUNT</label>
          <input type="number" class="col-span-3 border border-gray-400 px-2 py-1 rounded" />
        </div>
        <div>
          <label class="text-gray-600 font-semibold block mb-1">COMMENTS/REMARKS</label>
          <textarea rows="4" class="w-full border border-gray-400 rounded p-2"></textarea>
        </div>
      </div>

      <!-- Form Right -->
      <div class="hidden sm:block md:col-span-1">
      <div class="flex flex-col justify-between">
        <div>
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
  </div>
  <script>
    const toggleBtn = document.getElementById('toggleReports');
    const reportMenu = document.getElementById('reportMenu');

    toggleBtn.addEventListener('click', () => {
      reportMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
