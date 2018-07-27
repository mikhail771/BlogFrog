<?php
namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Blog;


class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('A day with Frogs');
        $blog1->setBlog('Лягушки – это амфибии, населяющие практически все части мира. 
        Они обитают повсюду – в водоемах или болотах, на земле, даже на глубине нескольких метров в 
        твердом слое глины, на деревьях.
Это обстоятельство не могло не отразиться на видовом разнообразии лягушек.
Эти удивительные земноводные подразделяются на три вида: собственно лягушки, жабы и квакши.');
        $blog1->setImage('frog1.jpg');
        $blog1->setAuthor('Mikhail');
        $blog1->setTags(' paradise, frog');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('About Frogs');
        $blog2->setBlog('Не все виды лягушек безобидны. Например, лягушки «кокои», обитающие в джунглях Южной Америки и Колумбии, были признаны самыми ядовитыми сухопутными животными на нашей планете. Яд этой лягушки в тысячи раз сильнее цианистого калия и в 35 раз сильнее яда среднеазиатской кобры.');
        $blog2->setImage('frog2.jpg');
        $blog2->setAuthor('Odin');
        $blog2->setTags('frog, poison, dangerous');
        $blog2->setCreated(new \DateTime("2018-07-23 06:12:33"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);


        $manager->flush();
    }

}