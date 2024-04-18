let tl = gsap.timeline({defaults: {duration: 0.75}})
tl.fromTo('body', {opacity: 0, y: -50}, {opacity: 1, y: 0})
tl.fromTo('#projects h1', {opacity: 0, x: -50}, {opacity: 1, x: 0})
tl.fromTo('.profile', {opacity: 0, x: 100}, {opacity: 1, x: 0})