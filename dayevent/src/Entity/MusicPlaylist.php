<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MusicPlaylist
 *
 * @ORM\Table(name="music_playlist", indexes={@ORM\Index(name="id_music", columns={"id_music"}), @ORM\Index(name="id_playlist", columns={"id_playlist"})})
 * @ORM\Entity
 */
class MusicPlaylist
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_playlist_music", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlaylistMusic;

    /**
     * @var \Playlist
     *
     * @ORM\ManyToOne(targetEntity="Playlist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_playlist", referencedColumnName="id")
     * })
     */
    private $idPlaylist;

    /**
     * @var \Music
     *
     * @ORM\ManyToOne(targetEntity="Music")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_music", referencedColumnName="id")
     * })
     */
    private $idMusic;


}
