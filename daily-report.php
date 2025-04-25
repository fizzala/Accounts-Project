
<?php include 'header.php' ?>
<body>
  <div class="bg-[#E7E8E9] w-full p-6 sm:p-8">
    
    <!-- Main Grid for medium and larger screens -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-40 flex flex-column">

      <!-- Left Content -->
      <div class="overflow-auto col-span-2 grid gap-4">
        <div class="flex flex-row justify-between items-end">
          <div class="w-[40%]"><label for="report-date" class="font-medium">Date</label>
            
            <input type="date" class="border border-gray-400 rounded p-2  bg-yellow-100 w-full">
          </div>

          <div class="w-[40%]" >
            <label for="date" class="font-semibold">Date</label>
            <input id="date" class="rounded p-2 bg-yellow-100 w-full border border-gray-400" type="text">
          </div>
        </div>
        <p class="text-lg mt-2 font-medium">Daily Report</p>
        <table class="table-auto w-full text-sm text-left">
          <thead class="bg-yellow-100 font-semibold">
            <tr>
              <th class="border border-black px-1 md:px-4 py-2">MRN</th>
              <th class="border border-black px-1 md:px-4 py-2">BILL NO</th>
              <th class="border border-black px-1 md:px-4 py-2">COST CENTRE</th>
              <th class="border border-black px-1 md:px-4 py-2">AMOUNT</th>
              <th class="border border-black px-1 md:px-4 py-2">COMMENT</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-black px-3 py-2">250212-001</td>
              <td class="border border-black px-3 py-2"></td>
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
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
              <td class="border border-black px-3 py-2"></td>
            </tr>
            <tr>
              <td class="border border-black px-3 py-2 h-8"></td>
              <td class="border border-black px-3 py-2"></td>
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
          </ul>

        </div>
      </div>



    </div>
  </div>
</body>

</html>