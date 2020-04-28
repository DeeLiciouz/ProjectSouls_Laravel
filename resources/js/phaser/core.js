var nav = document.getElementsByTagName('nav'),
  navHeight = nav[0].offsetHeight,
  screenWidth = window.innerWidth,
  screenHeight = window.innerHeight-navHeight;

var config = {
  type: Phaser.AUTO,
  width: screenWidth,
  height: screenHeight,
  physics: {
    default: 'arcade',
    arcade: {
      gravity: { y: 200 }
    }
  },
  scene: {
    preload: preload,
    create: create
  }
};

var game = new Phaser.Game(config);

function preload ()
{
  this.load.setBaseURL('http://labs.phaser.io');

  this.load.image('sky', 'assets/skies/space3.png');
  this.load.image('logo', 'assets/sprites/phaser3-logo.png');
  this.load.image('red', 'assets/particles/red.png');
}

function create ()
{
  this.add.image(screenWidth/2, screenHeight/2, 'sky');

  var particles = this.add.particles('red');

  var emitter = particles.createEmitter({
    speed: 100,
    scale: { start: 1, end: 0 },
    blendMode: 'ADD'
  });

  var logo = this.physics.add.image(400, 100, 'logo');

  logo.setVelocity(100, 200);
  logo.setBounce(1, 1);
  logo.setCollideWorldBounds(true);

  emitter.startFollow(logo);
}