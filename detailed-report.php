<?php include 'header.php' ?>
<body>
  <div class="bg-[#E7E8E9] w-full p-6 sm:p-8">
    <!-- Main Grid for medium and larger screens -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-40">
      <!-- Left Content -->
      <div class="overflow-auto col-span-2 grid gap-4 ">
        <div class="flex flex-row justify-between items-end">
          <div class="w-[30%]" >
            <label for="date" class="font-semibold">From Date</label>
            <input type="date" id="date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-full">
          </div>
          <div class="w-[30%]" >
            <label for="date" class="font-semibold">To Date</label>
            <input type="date" id="date" class="border border-gray-400 rounded p-2 bg-yellow-100 w-full">
          </div>
          <div class="w-[30%]" >
            <label for="date" class="font-semibold">Date Range</label>
            <input id="date" class="rounded p-2 bg-yellow-100 w-full border border-gray-400" type="text">
          </div>
          
          <!-- <div class="flex justify-between py-4 w[40%]">
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
        
        <p class="text-lg mt-2 font-medium">Detailed Report</p>
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

      <!-- Sidebar for larger screens -->
      <div class="hidden sm:block md:col-span-1">
        <div class="flex flex-col justify-start mt-6">
          <div class="bg-[#444] text-white font-semibold text-center py-2 rounded mb-4">Report(s)</div>
          <ul class="text-gray-700 space-y-2">
            <li><a href="daily-report.php">Daily Report</a></li>
            <li><a href="detailed-report.php">Detailed Report</a></li>
            <li><a href="cost-centres.php">Cost Centres Report</a></li>
            <li><a href="add-cost.php">Add Cost</a></li>
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
