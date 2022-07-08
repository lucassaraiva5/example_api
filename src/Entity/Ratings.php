<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use App\Entity\Interfaces\ApplicationEntityInterface;
use App\Repository\CastMovieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RatingRepository::class)
 */
class Ratings implements ApplicationEntityInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", name="imdb")
     * @Groups({"rating:read", "rating:write", "movie:read", "movie:write"})
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=2,
     *     max=50,
     *     maxMessage="Describe your cheese in 50 chars or less"
     * )
     */
    private $imdb;

    /**
     * @ORM\Column(type="float", name="rotten_tomatto")
     * @Groups({"rating:read", "rating:write", "movie:read", "movie:write"})
     * @Assert\NotBlank()
     * @SerializedName("rotten_tomatto")
     * @Assert\Length(
     *     min=2,
     *     max=50,
     *     maxMessage="Describe your cheese in 50 chars or less"
     * )
     */
    private $rottenTomatto;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getImdb()
    {
        return $this->imdb;
    }

    /**
     * @param mixed $imdb
     * @return Rating
     */
    public function setImdb($imdb)
    {
        $this->imdb = $imdb;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRottenTomatto()
    {
        return $this->rottenTomatto;
    }

    /**
     * @param mixed $rottenTomatto
     * @return Rating
     */
    public function setRottenTomatto($rottenTomatto)
    {
        $this->rottenTomatto = $rottenTomatto;
        return $this;
    }

    public function toArray() {
        return [
            "imdb" => $this->imdb,
            "rotten_tomatto" => $this->rottenTomatto
        ];
    }
}
