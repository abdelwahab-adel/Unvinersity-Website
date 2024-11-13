let side = document.querySelector(".rectangle-container");
let bossWord = document.querySelector(".allbosssec");
let newsTitle = document.querySelector(".newsTitle");
let news = document.querySelector(".news");
let lnews = document.querySelector(".l-news");
let rnews = document.querySelector(".r-news");
let events = document.querySelector(".events");
let about = document.querySelector("#about");
let complaints = document.querySelector("#complaints");
let footer = document.querySelector(".footer");
let nums = document.querySelectorAll(".num");
let numsSection = document.querySelector(".numbers");
let started = false;
let navbar = document.querySelector(".navbar");
let navbarLinks = document.querySelectorAll(".navbar a");
let canvas = document.querySelector(".offcanvas");
function hiddenSideBar() {
  side.classList.add("d-none");
}
function showSidrBar() {
  side.classList.remove("d-none");
}

function StopHover() {
  canvas.classList.remove("canHover");
}
function ShowHover() {
  canvas.classList.add("canHover");
}
// owl carousel
$(".owl-carousel").owlCarousel({
  loop: true,
  autoplay: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 3,
    },
  },
});
var owl = $(".owl-carousel-colleges");
owl.owlCarousel({
  loop: true,
  autoplay: true,
  nav: true,
  margin: 10,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    960: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});
// owl.on("mousewheel", ".owl-stage", function (e) {
//   if (e.deltaY > 0) {
//     owl.trigger("next.owl");
//   } else {
//     owl.trigger("prev.owl");
//   }
//   e.preventDefault();
// });

// the accessability

(function (d) {
  let s = d.createElement("script");
  s.setAttribute("data-position", 3);
  s.setAttribute("data-account", "z9FQba1HXZ");
  s.setAttribute("src", "https://cdn.userway.org/widget.js");
  s.setAttribute("style", "position: fixed; bottom: 0; left: 0;"); // Custom style to position at bottom left
  (d.body || d.head).appendChild(s);
})(document);

// Animation
window.onscroll = function () {
  if (window.scrollY >= 80) {
    navbar.classList.add("stiky");
    navbar.classList.remove("bg-body-tertiary");
    navbarLinks.forEach((link) => {
      link.classList.add("text-light");
    });
  }
  if (window.scrollY < 50) {
    navbar.classList.remove("stiky");
    navbar.classList.add("bg-body-tertiary");
    navbarLinks.forEach((link) => {
      link.classList.remove("text-light");
    });
  }
  if (window.scrollY >= bossWord.offsetTop + 10) {
    bossWord.classList.remove("d-none");
  }
  if (window.scrollY >= newsTitle.offsetTop + 500) {
    newsTitle.classList.remove("d-none");
  }
  if (window.scrollY >= news.offsetTop - 200) {
    lnews.classList.remove("d-none");
    rnews.classList.remove("d-none");
  }
  if (window.scrollY >= news.offsetTop + 500) {
    events.classList.remove("d-none");
  }
  if (window.scrollY >= news.offsetTop + 1250) {
    about.classList.remove("d-none");
  }
  if (window.scrollY >= numsSection.offsetTop) {
    if (!started) {
      countNumbers();
    }
    started = true;
  }
  if (window.scrollY >= footer.offsetTop - 650) {
    complaints.classList.remove("d-none");
  }
};
// // the Number section
// function countNumbers() {
//   nums.forEach((num) => {
//     let startValue = 0;
//     let endValue = parseInt(num.getAttribute("data-target"));
//     let counter = setInterval(UpdateCounting, 2000 / endValue);
//     function UpdateCounting() {
//       if (startValue < 1000) {
//         startValue += 1;
//         num.innerText = startValue;
//       }
//       if (startValue >= 1000) {
//         startValue += 100;
//         num.innerText = startValue / 1000 + "K+";
//       }
//       if (startValue >= endValue) {
//         clearInterval(counter);
//       }
//     }
//   });
// }
function countNumbers() {
  nums.forEach((num) => {
    let startValue = 0;
    let endValue = parseInt(num.getAttribute("data-target"));
    let startTime;
    let duration = 2000; // Animation duration in milliseconds

    function animateCount(timestamp) {
      if (!startTime) startTime = timestamp;
      const elapsedTime = timestamp - startTime;

      if (elapsedTime < duration) {
        // Calculate the current value based on elapsed time and end value
        const progress = elapsedTime / duration;
        startValue = Math.floor(progress * endValue);

        // Update the displayed value
        if (startValue < 1000) {
          num.innerText = startValue;
        } else {
          num.innerText = (startValue / 1000).toFixed(1) + "K+";
        }

        // Request next animation frame
        requestAnimationFrame(animateCount);
      } else {
        // Ensure final value is displayed accurately
        num.innerText =
          endValue < 1000 ? endValue : (endValue / 1000).toFixed(1) + "K+";
      }
    }

    // Start the animation
    requestAnimationFrame(animateCount);
  });
}
