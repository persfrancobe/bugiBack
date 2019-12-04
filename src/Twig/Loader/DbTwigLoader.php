<?php
namespace App\Twig\Loader;
use App\Repository\TemplateRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Loader\LoaderInterface;

class DbTwigLoader implements LoaderInterface
{
    protected $dbh;

    public function __construct(TemplateRepository $templateRepository)
    {
        $this->dbh = $templateRepository;
    }

    public function getSourceContext($name)
    {
        if (false === $source = $this->getValue( $name)) {
        throw new \Twig\Error\LoaderError(sprintf('Template "%s" does not exist.', $name));
        }

        return new \Twig\Source($source, $name);
    }

    public function exists($name)
    {
        return $name === $this->getValue('name', $name);
    }

    public function getCacheKey($name)
    {
        return $name;
    }

    public function isFresh($name, $time)
    {
        if (false === $lastModified = $this->getValue('lastUpdate', $name)) {
        return false;
    }

    return $lastModified <= $time;
    }

    protected function getValue($name)
    {
        // $sth = $this->dbh->prepare('SELECT '.$column.' FROM templates WHERE name = :name');
        // $sth->execute([':name' => (string) $name]);
        // return $sth->fetchColumn();

        $tmp=$this->dbh->findOneBy(['name'=>'page1.html.twig']);
        return $tmp->getCore();

    }
}