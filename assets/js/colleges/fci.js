let Up = document.querySelector(".fa-circle-up");
let canvas = document.querySelector(".offcanvas");
let nums = document.querySelectorAll(".numbers .num");
let numbers = document.querySelector(".numbers");
let started = 0;
let main = document.querySelector(".main");
let newsTitle = document.querySelector(".newsTitle");
let numsTitle = document.querySelector(".numsTitle");
let depTitle = document.querySelector(".depTitle");
let news_1 = document.querySelectorAll(".news-1");
let news_2 = document.querySelectorAll(".news-2");
let news_3 = document.querySelectorAll(".news-3");
let cs_descripe = document.querySelector(".cs .descripe");
let cs_photo = document.querySelector(".cs .photo");
let it_descripe = document.querySelector(".it .descripe");
let it_photo = document.querySelector(".it .photo");
let is_descripe = document.querySelector(".is .descripe");
let is_photo = document.querySelector(".is .photo");
let managers = document.querySelector(".managers");
let access = document.querySelector(".uiiw");
window.onscroll = function () {
  if (window.scrollY >= newsTitle.offsetTop - 300) {
    Up.classList.remove("d-none");
  } else {
    Up.classList.add("d-none");
  }
  if (window.scrollY >= 138 && window.scrollY <= 888) {
    newsTitle.classList.add("animate");
  } else {
    newsTitle.classList.remove("animate");
  }

  if (window.scrollY >= 466) {
    news_1.forEach(function (ele) {
      ele.classList.add("animate");
    });
  } else {
    news_1.forEach(function (ele) {
      ele.classList.remove("animate");
    });
  }
  if (window.scrollY >= 860) {
    news_2.forEach(function (ele) {
      ele.classList.add("animate");
    });
  } else {
    news_2.forEach(function (ele) {
      ele.classList.remove("animate");
    });
  }
  if (window.scrollY >= 1240) {
    news_3.forEach(function (ele) {
      ele.classList.add("animate");
    });
  } else {
    news_3.forEach(function (ele) {
      ele.classList.remove("animate");
    });
  }
  if (window.scrollY >= numsTitle.offsetTop - 450) {
    numsTitle.classList.add("animate");
  } else {
    numsTitle.classList.remove("animate");
  }
  if (window.scrollY >= numbers.offsetTop - 350) {
    if (!started) {
      nums.forEach(function (ele) {
        countnums(ele);
      });
    }
    started = 1;
  }
  if (window.scrollY >= depTitle.parentElement.offsetTop - 450) {
    depTitle.classList.add("animate");
  } else {
    depTitle.classList.remove("animate");
  }
  if (window.scrollY >= cs_descripe.parentElement.offsetTop - 450) {
    cs_descripe.classList.add("animate");
    cs_photo.classList.add("animate");
  } else {
    cs_descripe.classList.remove("animate");
    cs_photo.classList.remove("animate");
  }

  if (window.scrollY >= it_descripe.parentElement.offsetTop - 450) {
    it_descripe.classList.add("animate");
    it_photo.classList.add("animate");
  } else {
    it_descripe.classList.remove("animate");
    it_photo.classList.remove("animate");
  }
  if (window.scrollY >= is_descripe.parentElement.offsetTop - 450) {
    is_descripe.classList.add("animate");
    is_photo.classList.add("animate");
  } else {
    is_descripe.classList.remove("animate");
    is_photo.classList.remove("animate");
  }
  if (window.scrollY >= managers.offsetTop - 90) {
    Up.classList.add("text-light");
  } else {
    Up.classList.remove("text-light");
  }
};
function countnums(num) {
  let goal = num.dataset.goal;
  let count = setInterval(() => {
    num.textContent++;
    if (num.textContent == goal) {
      clearInterval(count);
    }
  }, 200 / goal);
}
function StopHover() {
  canvas.classList.remove("canHover");
}
function ShowHover() {
  canvas.classList.add("canHover");
}
