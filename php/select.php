<!DOCTYPE html>
<html>

<head>
  <style>
    /*the container must be positioned relative:*/
    .custom-select {
      position: relative;
      font-family: Arial;
      width: 300px;
      margin: 10px;
    }
    @media (max-width:661px) {
      .custom-select {
        width: 80%;
      }
    }
    .custom-select select {
      display: none;
      /*hide original SELECT element:*/
    }

    .select-selected {
      background: none;
      border-bottom: 4px solid #0094ff;
    }

    /*style the arrow inside the select element:*/
    .select-selected:after {
      position: absolute;
      content: "";
      top: 50%;
      right: 10px;
      width: 0;
      height: 0;
      border: 6px solid transparent;
      border-color: #fff transparent transparent transparent;
    }

    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
      border-color: transparent transparent #fff transparent;
      top: 30px;
    }

    /*style the items (options), including the selected item:*/
    .select-items div,
    .select-selected {
      color: #ffffff;
      padding: 8px 16px;
      cursor: pointer;
      background-color: rgba(0, 0, 0, 0.5);
      border-bottom: 4px solid #0094ff;
      margin-top: 5px;
      font-size: 30px;
      height: 60px;
      user-select: none;
    }
    @media (max-width:661px) {
      .select-items div,
    .select-selected {
      font-size: 20px;
      height: 45px;
      }
    }

    .selectYear {
      border-bottom: 4px solid #0094ff;
    }

    /*style items (options):*/
    .select-items {
      background-color: rgba(0, 0, 0, 0.5);
      position: absolute;
      top: -500%;
      left: 0;
      right: 0;
      z-index: 99;
    }

    #non-select {
      border-bottom: 4px solid red;
    }

    /*hide the items when the select box is closed:*/
    .select-hide {
      display: none;
    }

    .select-items div:hover,
    .same-as-selected {
      background-color: rgba(0, 0, 0, 0.1);
      border-bottom: 4px solid green;
    }
  </style>
</head>

<body>
  <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
  <div class="custom-select">
    <select name="year" required>
      <option value="0" class="selectYear">أختر السنة</option>
      <option value="1" onclick="setgreen(this)">1st year</option>
      <option value="2" onclick="setgreen(this)">2nd year</option>
      <option value="3" onclick="setgreen(this)">3rd year</option>
      <option value="4" onclick="setgreen(this)">4th year</option>
      <option value="5" onclick="setgreen(this)">5th year</option>
    </select>
  </div>

  <script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }

    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);

    let divs = document.querySelectorAll(".select-items div");
    let selectedYear = document.querySelector(".select-selected");
    divs.forEach(element => {
      element.onclick = function() {
        setgreen(this);
      };
    });
    selectedYear.onclick = function() {
      setgreen(this);
    }

    function setgreen(click) {

      divs.forEach(element => {
        if (!element.classList.contains("same-as-selected")) {
          element.style.cssText = "border-bottom-color:#0094ff;";
        }
      });

      if (click.innerHTML != "أختر السنة") {
        click.style.cssText = "border-bottom-color:#43a045;";
      }
    }
  </script>

</body>

</html>