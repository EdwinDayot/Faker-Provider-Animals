<?php

namespace FakerProviderAnimals\id_ID;

use Faker\Provider\Base;

/**
 * Class Animals
 *
 * @package FakerProviderAnimals
 */
class Animals extends Base
{

    /**
     * Animals names
     *
     * @var array
     */
    protected static $animals = array(
        "Babi Tanah", "Albatros", "Alligator", "Alpaka", "Semut", "Pemakan Semut", "Antelop", "Kera", "Armadillo", "Babun", "Badger", "Barakuda", "Kelelawar", "Beruang", "Beaver", "Lebah", "Bison", "Babi hutan", "Kerbau", "Kupu-kupu", "Unta", "Kapibara", "Rusa kutub", "Kasuari", "Kucing", "Ulat", "Kambing kamois", "Citah", "Ayam", "Simpanse", "Chinchilla", "Chough", "Kerang", "Kobra", "Kecoa", "Ikan Kod", "Kormoran", "Koyote", "Kepiting", "Burung jenjang", "Buaya", "Gagak", "Curlew", "Rusa", "Dinosaurus", "Anjing", "Ikan Hiu Dogfish", "Lumba-lumba", "Keledai", "Dotterel", "Merpati", "Capung", "Bebek", "Dugong", "Kedidi belang", "Elang", "Ekidna", "Belut", "Eland", "Gajah", "Gajah laut", "Elk", "Emu", "Falkon", "Ferret", "Burung finch", "Ikan", "Flamingo", "Lalat", "Rubah", "Kodok", "Seladang", "Gazel", "Gerbil", "Panda", "Jerapah", "Agas", "Gnu", "Kambing", "Angsa", "Goldfinch", "Ikan Mas Hias", "Gorila", "Goshawk", "Belalang", "Grouse", "Guanako", "Ayam guinea", "Tikus belanda", "Burung camar", "Hamster", "Terwelu", "Rajawali", "Landak susu", "Kuntul", "Ikan Herring", "Kuda nil", "Hornet", "Kuda", "Manusia", "Kolibri", "Hiena", "Kambing Ibex", "Ibis", "Jakal", "Jaguar", "Jay", "Ubur-ubur", "Kanguru", "Burung Raja-udang", "Koala", "Komodo", "Kookabura", "Kouprey", "Kudu", "Lapwing", "Lark", "Lemur", "Leopard", "Singa", "Llama", "Lobster", "Locust", "Loris", "Louse", "Lyrebird", "Magpie", "Itik melewar", "Dugong", "Mandrill", "Belalang sentadu", "Martes", "Meerkat", "Mink", "Tikus tanah", "Garangan", "Monyet", "Rusa besar", "Tikus", "Nyamuk", "Bagal", "Paus bertanduk", "Newt", "Bulbul", "Gurita", "Okapi", "Oposum", "Oryx", "Burung unta", "Berang-berang", "Burung hantu", "Ox", "Tiram", "Panter", "Burung Betet", "Partridge", "Peafowl", "Pelikan", "Pinguin", "Burung pegar", "Babi", "Burung dara", "Beruang kutub", "Pony", "Landak", "Pesut", "Anjing padang rumput", "Burung puyuh", "Quelea", "Quetzal", "Kelinci", "Rakun", "Burung rail", "Ram", "Tikus", "Gagak", "Rusa merah", "Panda merah", "Rusa kutub", "Badak", "Rook", "Salamander", "Ikan Salmon", "Sand-dollar", "Sandpiper", "Sarden", "Kalajengking", "Anjing laut", "Landak laut", "Kuda laut", "Anjing laut", "Hiu", "Domba", "Celurut", "Sigung", "Siput", "Ular", "Burung gereja", "Laba-laba", "Ibis-sendok", "Cumi-cumi", "Bajing", "Jalak", "Ikan Pari", "Serangga bau busuk coklat", "Bangau", "Burung layang-layang", "Angsa", "Tapir", "Tarsius", "Rayap", "Harimau", "Katak", "Ikan trout", "Kalkun", "Kura-kura", "Vikuna", "Beludak", "Burung bangkai", "Walabi", "Walrus", "Wasp", "Kerbau air", "Cerpelai", "Paus", "Serigala", "Wolverine", "Wombat", "Berkik", "Burung pelatuk", "Cacing", "Wren", "Yak", "Zebra"
    );

    /**
     * Animal
     *
     * @example 'elephant'
     *
     * @return string
     */
    public static function animal()
    {
        return static::randomElement(static::$animals);
    }
}
