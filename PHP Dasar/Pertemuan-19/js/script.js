// Take the elements are you needs
let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombol-cari');
let content = document.getElementById('content');

// Add an event when the keyword is typed

// function getOutData(url, success, error) {
//     keyword.addEventListener('keyup', function() {
//         let xhr = new XMLHttpRequest();

//         xhr.onreadystatechange = function() {
//             if (xhr.readyState === 4) {
//                 if(xhr.status === 200) {
//                     success(xhr.responseText);
//                 } else {
//                     error(xhr.responseText);
//                 }
//             }
//         }
//         xhr.open('get', url)
//         xhr.send();
//     })
// }

// function success(s) {
//     console.log(s)
// }

// function error(eror) {
//     console.log(eror);
// }

// getOutData('ajax/coba.txt', success, error);

keyword.addEventListener('keyup', function() {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200)  {
            content.innerHTML =xhr.responseText;
        }
    }
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true)
    xhr.send()
})





