<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use App\Entity\Interfaces\ApplicationEntityInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\MakerBundle\ApplicationAwareMakerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 */
class Movie implements ApplicationEntityInterface
{
    /**
     * @ORM\Id
     * @Groups({"movie:read"})
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     * @SerializedName("release_date")
     * @Assert\NotBlank()
     */
    private $releaseDate;

    /**
     * @ORM\Column(type="string", length=200)
     * @Groups({"movie:read", "movie:write"})
     * @Assert\NotBlank()
     */
    private $director;

    /**
     * @ORM\Column(name="definition", type="array", nullable=true)
     * @SerializedName("casts")
     * @Assert\NotBlank()
     */
    private $casts;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ratings", cascade={"persist"})
     * @Assert\NotBlank()
     */
    private $ratings;

    public function __construct()
    {
        $this->casts = [];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;

        return $this;
    }

    /**
     * @return array
     */
    public function getCasts()
    {
        return $this->casts;
    }

    /**
     * @param array $casts
     * @return Movie
     */
    public function setCasts($casts): Movie
    {
        $this->casts = $casts;
        return $this;
    }

    public function addCasts($cast) {
        if(!$this->casts->contains($cast)) {
            $this->casts->add($cast);
        }
    }

    public function removeCasts($cast) {
        if($this->casts->contains($cast)) {
            $this->casts->remove($cast);
        }
    }

    /**
     * @return mixed
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * @param mixed $ratings
     * @return Movie
     */
    public function setRatings($ratings)
    {
        $this->ratings = $ratings;
        return $this;
    }

    public function toArray()
    {
        return [
            "name" => $this->name,
            "casts" => $this->casts,
            "release_date" => $this->releaseDate->format('d-m-Y'),
            "director" => $this->director,
            "ratings" => $this->ratings->toArray()
        ];
    }

    public function toArrayCreated()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "casts" => $this->casts,
            "release_date" => $this->releaseDate->format('d-m-Y'),
            "director" => $this->director,
            "ratings" => $this->ratings->toArray()
        ];
    }

}
