const FULL_NAME = 0, CODE_TRIPLE = 1, CODE_SINGLE = 2;

/*
 * Links
 * http://wbiomed.curtin.edu.au/biochem/tutorials/aaquiz/index.html
 * https://upload.wikimedia.org/wikipedia/commons/5/51/Molecular_structures_of_the_21_proteinogenic_amino_acids.svg
 */

/*
 * E electrical, P positive, N negative
 * P polar uncharged
 * H hydrophobic
 * S special
 */
const SC_E_P = 0, SC_E_N = 1, SC_P = 2, SC_H = 3, SC_S = 4;

export default aminoAcids = [
    {
        "name": ["alanine", "ala", "A"],
        "sideChain": SC_H,
        "codons": ["GCA", "GCC", "GCG", "GCT"],
        "molFormula": "C3H7NO2"
    }, {
        "name": ["arginine", "arg", "R"],
        "sideChain": SC_E_P,
        "codons": ["AGA", "AGG", "CGA", "CGC", "CGG", "CGT"],
        "molFormula": "C6H14N4O2"
    }, {
        "name": ["asparagine", "asn", "N"],
        "sideChain": SC_P,
        "codons": ["AAC", "AAT"],
        "molFormula": "C4H8N2O3"
    }, {
        "name": ["aspartic acid", "asp", "D"],
        "sideChain": SC_E_N,
        "codons": ["GAC", "GAT"],
        "molFormula": "C4H7NO4"
    }, {
        "name": ["cysteine", "cys", "C"],
        "sideChain": SC_S,
        "codons": ["TGC", "TGT"],
        "molFormula": "C3H7NO2S"
    }, {
        "name": ["glutamine", "gln", "Q"],
        "sideChain": SC_P,
        "codons": ["CAA", "CAG"],
        "molFormula": "C5H10N2O3"
    }, {
        "name": ["glutamic acid", "glu", "E"],
        "sideChain": SC_E_N,
        "codons": ["GAA", "GAG"],
        "molFormula": "C5H9NO4"
    }, {
        "name": ["glycine", "gly", "G"],
        "sideChain": SC_S,
        "codons": ["GGA", "GGC", "GGG", "GGT"],
        "molFormula": "C2H5NO2"
    }, {
        "name": ["histidine", "his", "H"],
        "sideChain": SC_E_P,
        "codons": ["CAC", "CAT"],
        "molFormula": "C6H9N3O2"
    }, {
        "name": ["isoleucine", "ile", "I"],
        "sideChain": SC_H,
        "codons": ["ATA", "ATC", "ATT"],
        "molFormula": "C6H13NO2"
    }, {
        "name": ["leucine", "leu", "L"],
        "sideChain": SC_H,
        "codons": ["CTA", "CTC", "CTG", "CTT", "TTA", "TTG"],
        "molFormula": "C6H13NO2"
    }, {
        "name": ["lysine", "lys", "K"],
        "sideChain": SC_E_P,
        "codons": ["AAA", "AAG"],
        "molFormula": "C6H14N2O2"
    }, {
        "name": ["methionine", "met", "M"],
        "sideChain": SC_H,
        "codons": ["ATG"],
        "molFormula": "C5H11NO2S"
    }, {
        "name": ["phenylalanine", "phe", "F"],
        "sideChain": SC_H,
        "codons": ["TTC", "TTT"],
        "molFormula": "C9H11NO2"
    }, {
        "name": ["proline", "pro", "P"],
        "sideChain": SC_S,
        "codons": ["CCA", "CCC", "CCG", "CCT"],
        "molFormula": "C5H9NO2"
    }, {
        "name": ["serine", "ser", "S"],
        "sideChain": SC_P,
        "codons": ["AGC", "AGT", "TCA", "TCC", "TCG", "TCT"],
        "molFormula": "C3H7NO3"
    }, {
        "name": ["threonine", "thr", "T"],
        "sideChain": SC_P,
        "codons": ["ACA", "ACC", "ACG", "ACT"],
        "molFormula": "C4H9NO3"
    }, {
        "name": ["tryptophan", "trp", "W"],
        "sideChain": SC_H,
        "codons": ["TGG"],
        "molFormula": "C11H12N2O2"
    }, {
        "name": ["tyrosine", "tyr", "Y"],
        "sideChain": SC_H,
        "codons": ["TAC", "TAT"],
        "molFormula": "C9H11NO3"
    }, {
        "name": ["valine", "val", "V"],
        "sideChain": SC_H,
        "codons": ["GTA", "GTC", "GTG", "GTT"],
        "molFormula": "C5H11NO2"
    }
];