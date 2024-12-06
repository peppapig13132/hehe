let questions = [
  {
    question: "Кому бы помогли ?",
    options: [
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1607235924389-5216cbdc16f4.jpg"><br><br><span>Больным животным</span>',
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1550791871-0bcd47c97881.jpg"><br><br><span>Больным людям</span>'
    ],
    percent: [
      '<div class="percent">28%</div>',
      '<div class="percent2">72%</div>'
    ]
  },
  {
    question: "Кому бы помогли ?",
    options: [
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1613858749733-3a3e456e3d9e.jpg"><br><br><span>Проекту, занимающемуся экологией</span>',
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1587454595192-db58f0dccded.jpg"><br><br><span>Проекту, который борется с коррупцией</span>'
    ],
    percent: [
      '<div class="percent">78%</div>',
      '<div class="percent2">22%</div>'
    ]
  },
  {
    question: "Кому бы помогли ?",
    options: [
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/istockphoto-157394755-170667a.jpg"><br><br><span>Женщинам, в трудной жизненной ситуации</span>',
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1512581574034-6f1da619c5fa.jpg"><br><br><span>Мужчинам, в трудной жизненной <br>ситуации</span>'
    ],
    percent: [
      '<div class="percent">76%</div>',
      '<div class="percent2">24%</div>'
    ]
  },
  {
    question: "Кому бы помогли ?",
    options: [
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1578496781379-7dcfb995293d.jpg"><br><br><span>Больным детям</span>',
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1472066719480-ecc7314ed065.jpg"><br><br><span>Больным старикам</span>'
    ],
    percent: [
      '<div class="percent">73%</div>',
      '<div class="percent2">27%</div>'
    ]
  },
  {
    question: "Кому бы помогли ?",
    options: [
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1503944583220-79d8926ad5e2.jpg"><br><br><span>Этому ребенку</span>',
      '<img src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/photo-1488521787991-ed7bbaae773c.jpg"><br><br><span>Этому ребенку</span>'
    ],
    percent: [
      '<div class="percent">20%</div>',
      '<div class="percent2">80%</div>'
    ]
  }
];
//selecting all required elements
const start_btn = document.querySelector(".start_btn button");
const quiz_overlay = document.querySelector(".quiz_overlay");
const quiz_box = quiz_overlay.querySelector(".quiz_box");
const close = quiz_box.querySelector(".close_quiz");
const result_box = quiz_overlay.querySelector(".result_box");
const option_list = quiz_overlay.querySelector(".option_list");

// if startQuiz button clicked
start_btn.onclick = () => {
  quiz_box.classList.add("activeQuiz"); //show quiz box
  showQuetions(0); //calling showQestions function
  quiz_overlay.classList.add("activate")
  start_btn.classList.add("disable");
};

close.onclick = () => {
  quiz_box.classList.remove("activeQuiz")
  quiz_overlay.classList.remove("activate")
  start_btn.classList.remove("disable");
};

let que_count = 0;
let que_numb = 1;
let counter;
let counterLine;
let widthValue = 0;

const quit_quiz = result_box.querySelector(".buttons .quit");

// if quitQuiz button clicked
quit_quiz.onclick = () => {
  window.location.reload(); //reload the current window
};

const next_btn = document.querySelector(".foot_quiz .next_btn");
const bottom_ques_counter = document.querySelector(".total .total_que");

// if Next Que button clicked
next_btn.onclick = () => {
  if (que_count < questions.length) {
    //if question count is less than total question length
    que_count++; //increment the que_count value
    que_numb++; //increment the que_numb value
    showQuetions(que_count); //calling showQestions function
    clearInterval(counter); //clear counter
    clearInterval(counterLine); //clear counterLine
    next_btn.classList.remove("show"); //hide the next button
  } else {
    quiz_box.classList.remove("activeQuiz"); //hide quiz box
    result_box.classList.add("activeResult"); //show result box
  }
};

// getting questions and options from array
function showQuetions(index) {
  const que_text = document.querySelector(".que_text");

  //creating a new span and div tag for question and option and passing the value using array index
  let que_tag =
    "<span>" +
    questions[index].question +
    "</span>";
  let option_tag =
    '<div class="option">' + 
    questions[index].percent[0] +
    '<span>' +
    questions[index].options[0] +
    "</span></div>" +
    '<div class="option">' + 
    questions[index].percent[1] +
    '<span>' +
    questions[index].options[1] +
    "</span></div>";
  que_text.innerHTML = que_tag; //adding new span tag inside que_tag
  option_list.innerHTML = option_tag; //adding new div tag inside option_tag

  const option = option_list.querySelectorAll(".option");
  //const count = quiz_overlay.querySelector(".option_list .option .percent .count");
  //count.innerHTML = "<?php echo do_shortcode( '[show_counter]' ); ?>";

  // set onclick attribute to all available options
  for (i = 0; i < option.length; i++) {
    option[i].setAttribute("onclick", "optionSelected(this)");
  }
}
//if user clicked on option
function optionSelected() {
  if (que_count < questions.length - 1) {
    const percent = option_list.querySelector(".option .percent")
    percent.classList.add("actv")
    const percent2 = option_list.querySelector(".option .percent2")
    percent2.classList.add("actv")
    next_btn.classList.add("show"); //show the next button if user selected any option
  } else {
    que_count++; //increment the que_count value
    que_numb++; //increment the que_numb value
    quiz_box.classList.remove("activeQuiz"); //hide quiz box
    result_box.classList.add("activeResult"); //show result box
  }
}
