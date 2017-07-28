function rand(choices) {
  return choices[Math.floor(Math.random() * choices.length)];
}

$(document).ready(function() {
  // $('div.column-second li').each(function() {
  //   $(this).text($(this).text().replace(', ', ''));
  // });
  // $('div.column-second li').css('font-size', '3rem')
  // $('div.column-second li + li').hide();

  function cycleList(list) {
    let save = $(list).children('li').eq(0);
    $(list).children('li').eq(0).remove();
    $(list).append(save);
  }

  function slideList(list) {
    let cur = $(list).children('li.visible');
    let next = $(list).children('li.visible + li');

    $(list).animate({ 'margin-top': '-3rem' }, 1000, function() {
      cycleList(list);
      // $(list).css('bottom', 0)
    });

    cur.removeClass('visible');
    next.addClass('visible');
  }

  // slideList('div.column-second ul');
})
