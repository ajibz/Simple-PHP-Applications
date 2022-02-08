

const Questions =
 [{
number:1,
question:"What is the name of the president of Nigeria",
optionA:"Goodluck Jonathan",
optionB:"Olusegun Obasanjo",
optionC:"Mohammed Buhari",
optionD:"Yemi Osibanjo"

},
{
number:2,
question:"What is the name of the programmer of this software",
optionA:"Ogundare Bunmi",
optionB:"Olusegun Obasanjo",
optionC:"Ajibose Alexander",
optionD:"Jokodolu Akeem"

},
{
number:3,
question:"What is the name of the Governor of Ogun state",
optionA:"Dapo Abiodun",
optionB:"Ajibose Alexander",
optionC:"Mohammed Buhari",
optionD:"Seyi Makinde"

},
{
number:4,
question:"What is the Full meaning of NAF",
optionA:"Nigerian Air Football",
optionB:"National Aircraft Fault",
optionC:"Nigerian Air Force",
optionD:"National Aeronautic Flight"

},
{
number:5,
question:"What is the name of the Vice-president of Nigeria",
optionA:"Goodluck Jonathan",
optionB:"Olusegun Obasanjo",
optionC:"Mohammed Buhari",
optionD:"Yemi Osibanjo"

}
];

 let sum =0
 let count = 0
let Answer = [];


// window.onload = function(){
 
 // Questions.forEach((e)=>{


// let NewQuestions = Questions[0].question
//      let OptionA  = Questions[0].optionA
//      let OptionB  = Questions[0].optionB
//      let OptionC  = Questions[0].optionC
//      let OptionD  = Questions[0].optionD
//      document.getElementById('quest').textContent=NewQuestions;
//      document.getElementById('optA').textContent=OptionA;
//      document.getElementById('optB').textContent=OptionB;
//      document.getElementById('optC').textContent=OptionC;
//      document.getElementById('optD').textContent=OptionD;



  // })
// }








 document.getElementById('prev').addEventListener('click', function(){
 	count--
 	if (count<0) {
 		count=0
 	};
 	Answer.pop(1);
 	let NewQuestions = Questions[count].question
 	let OptionA  = Questions[count].optionA
 	let OptionB  = Questions[count].optionB
 	let OptionC  = Questions[count].optionC
 	let OptionD  = Questions[count].optionD
 	document.getElementById('quest').textContent=NewQuestions;

 	document.getElementById('optA').textContent=OptionA;
 	document.getElementById('optB').textContent=OptionB;
 	document.getElementById('optC').textContent=OptionC;
 	document.getElementById('optD').textContent=OptionD;
 })

  document.getElementById('next').addEventListener('click', function(){
 
    count++
    let counter = count-1

 	if (counter==Questions.length) {
 		counter--

        document.getElementById('result').innerText = "Your Result is = "+sum
        // location.reload()
 	};



 	

 	let NewQuestions = Questions[counter].question
 	let OptionA  = Questions[counter].optionA
 	let OptionB  = Questions[counter].optionB
 	let OptionC  = Questions[counter].optionC
 	let OptionD  = Questions[counter].optionD

 	document.getElementById('quest').textContent=NewQuestions;
 	document.getElementById('optA').textContent=OptionA;
 	document.getElementById('optB').textContent=OptionB;
 	document.getElementById('optC').textContent=OptionC;
 	document.getElementById('optD').textContent=OptionD;

 	document.getElementById('radioA').value=OptionA;
 	document.getElementById('radioB').value=OptionB;
 	document.getElementById('radioC').value=OptionC;
 	document.getElementById('radioD').value=OptionD;



switch (counter) {
    case 1:
    if (document.getElementById('radioC').checked) {
         sum=sum+1
    }
       
        break;
        case 2:
       if (document.getElementById('radioC').checked) {
         sum=sum+1
    }
        break;

         case 3:
       if (document.getElementById('radioA').checked) {
         sum=sum+1
    }
        break;

         case 4:
       if (document.getElementById('radioC').checked) {
         sum=sum+1
    }
        break;

         case 5:
       if (document.getElementById('radioD').checked) {
         sum=sum+1
    }
        break;
    default:
        sum=sum
        break;
}

 



})