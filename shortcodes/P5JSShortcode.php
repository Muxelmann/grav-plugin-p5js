<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Uri;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class P5JSShortcode extends Shortcode
{
    public function init()
    {
        echo "P5JS init!";

        $this->shortcode->getRawHandlers()->add('p5js', function(ShortcodeInterface $sc) {
            $canvasID = $sc->getParameter('canvas', '');
            echo "P5JS handles!";
            
            if (empty($canvasID)) {
                return '<p style="color: red;">Please specify a canvas ID (<code>[p5js canvas=ID]</code>) and use it when creating the canvas (<code>createCanvas(400, 400, document.getElementById(\'c1\'));</code>).<p>';
            } else {
                // $this->grav['assets']->addInlineJs($sc->getContent(), ['group' => 'bottom']);
                $content = $sc->getContent();
                // return '<canvas id="'.$canvasID.'"></canvas><script>'.$content.'</script>';


                return $this->twig->processTemplate('shortcodes/p5js.html.twig', [
                    'canvas_id' => $canvasID,
                    'content' => trim($content)
                ]);
            }
        });
    }
}