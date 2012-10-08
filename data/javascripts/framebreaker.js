// break out of frame, config loaded

// set name:framebreaker;

// if[loaded:framebreaker] {
if (top.location != location)
  {
    top.location.href = document.location.href;
  }
// }