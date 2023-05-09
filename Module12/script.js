document.getElementById("calculateBtn").addEventListener("click", function() {
    const weight = parseFloat(document.getElementById("weightInput").value);
    const height = parseFloat(document.getElementById("heightInput").value);
    const bmi = weight / (height * height);
    
    document.getElementById("result").innerHTML = `Your BMI is: ${bmi.toFixed(2)}`;
  });
  