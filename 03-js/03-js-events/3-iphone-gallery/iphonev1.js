// document.addEventListener('DOMContentLoaded',function(){
// document.querySelector('#image1').addEventListener('click',function(){
//     document.querySelector('#bigImg').src =  document.querySelector('#image1').src;
//     document.querySelector('#bigImg').src =  'blue1.jpg';
// });
// document.querySelector('#image2').addEventListener('click',function(){
//     document.querySelector('#bigImg').src =  document.querySelector('#image2').src;
// });
// document.querySelector('#image3').addEventListener('click',function(){
//     document.querySelector('#bigImg').src =  document.querySelector('#image3').src;
// });
// })

document.addEventListener('DOMContentLoaded', function () {
    console.log('hello there!!!');
    let gallery = document.querySelectorAll('.iphoneGallery');
    console.log(gallery);
    gallery.forEach(function(item){
        console.log(item);
        item.addEventListener('click', function(){
            document.querySelector('#bigImg').src =  item.src;
        })
    })
})