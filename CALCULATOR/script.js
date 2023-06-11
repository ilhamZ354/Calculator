
function myFunction(operator){
      const textInput = document.getElementById('angka');
      textInput.value += operator;
}

function reset(){
    const textInput = document.getElementById('angka');
    textInput.value='';
}

function submit(){
    const hasil = document.getElementById('nilai');
    hasil.submit();
}