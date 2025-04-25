
<?php include 'header.php' ?>
<body>
  <div class="bg-[#E7E8E9] w-full p-6 sm:p-8">
    <!-- Main Grid for medium and larger screens -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-40">

      <!-- Left Content -->
      <div class="col-span-2 grid gap-4">
        <div>
          <label class="block font-medium mb-1">Date</label>
          <input type="date" class="w-full border border-gray-400 rounded p-2 text-gray-700">
        </div>

        <div>
          <h2 class="font-semibold mb-1">Today</h2>
          <input type="text" placeholder="Credit" class="w-full border border-gray-400 rounded p-2 mb-2" />
          <input type="text" placeholder="Debit" class="w-full border border-gray-400 rounded p-2" />
        </div>

        <div>
          <h2 class="font-semibold mb-1">This Month</h2>
          <input type="text" placeholder="Credit" class="w-full border border-gray-400 rounded p-2 mb-2" />
          <input type="text" placeholder="Debit" class="w-full border border-gray-400 rounded p-2" />
        </div>

        <div>
          <h2 class="font-semibold mb-1">This Year (2025)</h2>
          <input type="text" placeholder="Credit" class="w-full border border-gray-400 rounded p-2 mb-2" />
          <input type="text" placeholder="Debit" class="w-full border border-gray-400 rounded p-2" />
        </div>

        <div class="text-sm text-right text-gray-700 mt-4 border-t pt-2">
          <p class="hover:underline cursor-pointer">Bills for the day</p>
          <p class="hover:underline cursor-pointer">Bills for the Month</p>
        </div>
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
