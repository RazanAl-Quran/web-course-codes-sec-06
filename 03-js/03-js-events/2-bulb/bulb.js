// document.addEventListener('DOMContentLoaded',function(){
//     document.querySelector('#on').addEventListener('click',function(){
//         document.querySelector('#myImage').src='bulbon.gif'
//     });
//     document.querySelector('#off').addEventListener('click',function(){
//         document.querySelector('#myImage').src='bulboff.gif'
//     })
// })

document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('#on').addEventListener('click',turnOnBulb);
    document.querySelector('#off').addEventListener('click',turnOffBulb);
})

function turnOnBulb () {
    document.querySelector('#myImage').src='bulbon.gif'
}

function turnOffBulb () {
    document.querySelector('#myImage').src='bulboff.gif'
}