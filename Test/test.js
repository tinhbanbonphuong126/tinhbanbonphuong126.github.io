function bai3 (x) {
var kq;
  if (x>10||x<0) kq = "Ban da nhap sai diem so";
  else if (x>=0&&x<4) kq = "F";
  else  if (x<5.5) kq = "D";
  else  if (x<7) kq = "C";
  else  if (x<8.5) kq = "B";
  else  kq = "A";

return kq;
}

var x = 10;
document.write (bai3(x));