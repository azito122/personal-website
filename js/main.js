function rand(choices) {
  return choices[Math.floor(Math.random() * choices.length)];
}

$(document).ready(function() {

  let langs = ['PHP', 'Python', 'HTML5', 'CSS3'];
  let things = ['A Moodle module for temporary enrolments', 'A script that improves date input UI'];
  let langs_used = [];
  let things_used = [];
  let gap = 1000;

  function randomThings() {
    if (things.length === 0) {
      things = things_used.splice();
      things_used = [];
    }

    let thing = rand(things);
    things.slice(things.indexOf(thing), 1);
    things_used.push(thing);

    $('div.row-third.column-second span').text(thing);
    setTimeout(randomThings, gap);
  }

  function randomLangs() {
    if (langs.length === 0) {
      langs = langs_used.slice();
      langs_used = [];
    }

    let lang = rand(langs);
    langs.splice(langs.indexOf(lang), 1);
    langs_used.push(lang);
    console.log(langs, lang, langs_used);

    $('div.row-second.column-second span').text(lang);

    setTimeout(randomLangs, gap);
  }

  setTimeout(randomThings, 1000);
  setTimeout(randomLangs, 1500)
})
