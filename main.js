const result = document.getElementById('result');

document.getElementById('myForm').addEventListener('submit', function(e){
    console.log('Start');

    e.preventDefault();
    
    let name = document.getElementById('searchingName').value;
    let file = document.getElementById('fileToanalyze');
    let sumowanie = document.getElementById('sumowanie');

    console.log(name);
});