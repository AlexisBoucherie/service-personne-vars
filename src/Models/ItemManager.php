<?php

class ItemManager
{
    /**
     * Generate a two-dimension array with all the services and their details
     *
     * @return array[]
     */
    public function listItems(): array
    {
        $aideAdmin = [
            'Aide administrative',
            'assets/img/admin.png',
            ['Courrier et factures', 'Démarches en ligne', 'Retraîte, CAF, impôts, Pôle-Emploi']];
        $coursesRepas = [
            'Courses et repas',
            'assets/img/shopping-bag.png',
            ['Livraison à domicile', 'Préparation des repas directement chez vous']];
        $repassage = [
            'Repassage',
            'assets/img/iron.png',
            ['Collecte de linge à domicile', 'Livraison de linge repassé']];
        $accompagnement = [
            'Accompagnement',
            'assets/img/calendar.png',
            ['Accompagnement des personnes en situation d\'invalidité temporaire', 'ex. RDV médicaux, coiffeur, courses']];

        return [$aideAdmin, $coursesRepas, $repassage, $accompagnement];
    }
}