const questions = [
    {
     'que': ' which of the following latest movies?',
     'a': 'HTML',
     'b': 'CSS',
     'c': 'php',
     'd': 'javascript',
     'correct': 'a'

    }

]
let index = 0;
const quesbox = document.getElementById("quesbox")
const loadquestion =()=>{
    const data = questions[index]
    quesbox.innerText =  data.que;


}

loadquestion();
