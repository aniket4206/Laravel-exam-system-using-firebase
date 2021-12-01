<link rel="stylesheet" type="text/css" href="{{ URL::to('style.css') }}">
<!-- <script type="text/javascript" src="{{ URL::to('jquery.js') }}"></script> -->
@include('Navbar')

<div class="quize">
  <center>@if(session('status'))
    <h6 class="alert alert-success mb-2">{{session('status')}}</h6>
  @endif</center>
  <div class="question-bar">
    <h2 class="qestion"></h2>
    <ul>
      <li>
        <input type="radio" name="option" id="a" class="ansList">
        <label for="a" class="ansa"></label>
      </li>
      <li>
        <input type="radio" name="option" id="b" class="ansList">
        <label for="b" class="ansb"></label>
      </li>
      <li>
        <input type="radio" name="option" id="c" class="ansList">
        <label for="c" class="ansc"></label>
      </li>
      <li>
        <input type="radio" name="option" id="d" class="ansList">
        <label for="d" class="ansd"></label>
      </li>

    </ul>
    <div class="footer-button">
      <button id="submit" class="submitBtn">Submit</button>
    </div>
  </div>
  <div id="showscore" class="scoreArea"></div>
</div>
<script>
    const questionDB = [
    {
      question : '1) Which type of JavaScript language is ___' ,
      a: 'Object-Oriented',
      b: 'Object-Based',
      c: 'Assembly-language',
      d: 'High-level',
      ans: 'b'
    },
    {
      question : '2) Which one of the following also known as Conditional Expression:' ,
      a: 'Alternative to if-else',
      b: 'Switch statement',
      c: 'If-then-else statement',
      d: 'Immediate if',
      ans: 'd'
    },
    {
      question : '3) In JavaScript, what is a block of statement?' ,
      a: 'Conditional block',
      b: 'Block that combines a number of statements into a single compound statement',
      c: 'Both conditional block and a single statement',
      d: 'Block that contains a single statement',
      ans: 'b'
    },
    {
      question : '4) Which built-in method removes the last element from an array and returns that element?' ,
      a: 'last()',
      b: 'get()',
      c: 'pop()',
      d: 'None of the above.',
      ans: 'c'
    },
    {
      question : '5) Which of the following function of Array object removes the first element from an array and returns that element?' ,
      a: 'reverse()',
      b: 'shift()',
      c: 'slice()',
      d: 'some()',
      ans: 'b'
    },
    {
      question : '7) Which type of JavaScript language is ___' ,
      a: 'Object-Oriented',
      b: 'Object-Based',
      c: 'Assembly-language',
      d: 'High-level',
      ans: 'b'
    },
    {
      question : '8) Which type of JavaScript language is ___' ,
      a: 'Object-Oriented',
      b: 'Object-Based',
      c: 'Assembly-language',
      d: 'High-level',
      ans: 'b'
    },
    {
      question : '9) Which type of JavaScript language is ___' ,
      a: 'Object-Oriented',
      b: 'Object-Based',
      c: 'Assembly-language',
      d: 'High-level',
      ans: 'b'
    },
    {
      question : '10) Which type of JavaScript language is ___' ,
      a: 'Object-Oriented',
      b: 'Object-Based',
      c: 'Assembly-language',
      d: 'High-level',
      ans: 'b'
    }
    
  ];
  
  
  const questionEl = document.querySelector('.qestion');
  const labelA = document.querySelector('.ansa');
  const labelB = document.querySelector('.ansb');
  const labelC = document.querySelector('.ansc');
  const labelD = document.querySelector('.ansd');
  const ansList = document.querySelectorAll('.ansList');
  const submit = document.querySelector('#submit');
  const showscore = document.querySelector('#showscore');
  const questionBar = document.querySelector('.question-bar');
  
  let countQuest = 0;
  let score = 0;
  // console.log(questionDB[countQuest]);
  loadQuestion();
  function loadQuestion(){
    const Qdb = questionDB[countQuest];
    questionEl.innerText = Qdb.question;
    labelA.innerText = Qdb.a;
    labelB.innerText = Qdb.b;
    labelC.innerText = Qdb.c;
    labelD.innerText = Qdb.d;
  }
  const getCheckAnswer = () => {
    let answer;
    ansList.forEach((currentAns) =>{
      if(currentAns.checked){
        answer = currentAns.id;
      }
    });
    return answer;
  }
  const deselectAll = () => {
    ansList.forEach((currentAns) => currentAns.checked = false);
  
  }
  submit.addEventListener('click', function(e){
    const checkedAnswer = getCheckAnswer();
    if(checkedAnswer === questionDB[countQuest].ans){
      score++;
    }
    countQuest++;
    deselectAll();
    if(countQuest < questionDB.length){
      loadQuestion();
    }else{
      let wrongAwnswer = questionDB.length - score;
      showscore.innerHTML = `<h3>You scored</h3>
          <div class="scoreBoard">
          <span class="scoreCount">${score} / ${questionDB.length} </span>
          <div class="wrongAwnswer">Wrong Answer: ${wrongAwnswer}</div>
          <button class="btn">Thanks </button></div>`;
      showscore.classList.remove('scoreArea');
      questionBar.classList.add('hidden');
      document.body.classList.add('score-color--white');
    }
  });
</script>