function fungsiklik1() {
    var x = document.getElementById('test-2')
    if (x.style.display === 'block') {
      document.getElementById("test-1").style.display='block'
      document.getElementById("test-2").style.display='none'
  }
}
function fungsiklik2() {
    var x = document.getElementById('test-1')
    if (x.style.display === 'block') {
      document.getElementById("test-1").style.display='none'
      document.getElementById("test-2").style.display='block'
  }
}
