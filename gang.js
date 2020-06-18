const btn1 = document.querySelector("#button1");
btn1.addEventListener('click',function() {
  
  const res1 = document.querySelector('#res1');
  res1.textContent = "ここをおしてね";
  res1.classList.add('gold');
});



// 動かんかったやつ
// ----------
// const btn2 = document.querySelector('button2');
// btn2.addEventListener('click',function() {

//   const res2 = document.querySelector('#res2')
//   const res3 = document.querySelector('#res3')
//   const res4 = document.querySelector('#res4')

//   res2.classList.add('hidden');
//   res3.classList.add('hidden');
//   res4.classList.add('hidden');
// });
