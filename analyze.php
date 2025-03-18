<?php require_once('./inc/header.php'); ?>

<!-- Start Scholarship Form -->
<div id="scholarship-form" class="flex items-center justify-center w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
  <div class="max-w-6xl mx-auto">
    <div class="flex-col items-center">
      <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
        <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Analyze Scholarship</p>
        <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">Scholarship Details Form</h2>
        <p class="my-6 text-xl font-medium text-gray-500">Fill out the details below to analyze scholarship application.</p>
      </div>

      <div class="w-full xl:w-full xl:pr-8 justify-center items-center">
        <form id="scholarshipForm" class="w-full max-w-lg">
          <!-- Personal Details -->
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first-name">First Name</label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="first-name" type="text" placeholder="Jane" required>
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last-name">Last Name</label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="last-name" type="text" placeholder="Doe" required>
            </div>
          </div>

          <!-- Education Qualification -->
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="education-qualification">Education Qualification</label>
              <select id="education-qualification" name="education-qualification" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="0">Undergraduate</option>
                <option value="1">Postgraduate</option>
                <option value="2">Doctorate</option>
              </select>
            </div>
          </div>

          <!-- Income Level -->
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="income">Income Level</label>
              <select id="income" name="income" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="0">Upto Upto  223,242 KES</option>
                <option value="1">23,242KES to 446,484 KES</option>
                <option value="2">446,484KES to 892,969 KES</option>
                <option value="3">Above 892,969 KES</option>
              </select>
            </div>
          </div>

          <!-- Annual Percentage -->
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="annual-percentage">Annual Percentage Score</label>
              <select id="annual-percentage" name="annual-percentage" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="0">60-70</option>
                <option value="1">70-80</option>
                <option value="2">80-90</option>
                <option value="3">90-100</option>
              </select>
            </div>
          </div>

          <!-- Gender, Disability, and Sports -->
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">Gender</label>
              <select id="gender" name="gender" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="1">Male</option>
                <option value="0">Female</option>
              </select>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="disability">Disability</label>
              <select id="disability" name="disability" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sports">Sports</label>
              <select id="sports" name="sports" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <button type="button" onclick="submitForm()" class="w-full py-3 bg-indigo-600 text-white rounded mt-4">Start Analysis</button>
            </div>
          </div>
            <!-- Result Display -->
      <div id="result" class="mt-6 text-center text-xl font-bold"></div>
        </form>

      
      </div>
    </div>
  </div>
</div>



<script>
function submitForm() {
    let formData = {
        Education_Qualification: parseInt(document.getElementById("education-qualification").value),
        Annual_Percentage: parseInt(document.getElementById("annual-percentage").value),
        Income: parseInt(document.getElementById("income").value),
        Gender_Male: parseInt(document.getElementById("gender").value),
        Disability_Yes: parseInt(document.getElementById("disability").value),
        Sports_Yes: parseInt(document.getElementById("sports").value)
    };

    fetch("http://127.0.0.1:8000/predict", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        let resultDiv = document.getElementById("result");
       

        // Apply styles based on response
        if (data.prediction === "Approved") {
          resultDiv.innerHTML = "Student is Eligible for Scholarship";
            resultDiv.className = "mt-6 text-center text-xl font-bold text-green-700 bg-green-100 border border-green-500 px-4 py-3 rounded";
        } else {
          resultDiv.innerHTML = "Student is Not Eligible for Scholarship";
            resultDiv.className = "mt-6 text-center text-xl font-bold text-blue-700 bg-blue-100 border border-blue-500 px-4 py-3 rounded";
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
}
</script>

<?php require_once('./inc/footer.php'); ?>
