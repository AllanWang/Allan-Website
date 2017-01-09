const FULL_NAME = 0, CODE_TRIPLE = 1, CODE_SINGLE = 2;

/*
 * E electrical, P positive, N negative
 * P polar uncharged
 * H hydrophobic
 * S special
 */
const SC_E_P = 0, SC_E_N = 1, SC_P = 2, SC_H = 3, SC_S = 4;

exports.aminoAcids = [
    {
        "name": ["alanine", "ala", "A"],
        "side_chain": SC_H,
        "codons": ["GCA", "GCC", "GCG", "GCT"]
    },
    {
        "name": ["arginine", "arg", "R"],
        "side_chain": SC_E_P,
        "codons": ["AGA", "AGG", "CGA", "CGC", "CGG", "CGT"]
    },
    {
        "name": ["asparagine", "asn", "N"],
        "side_chain": SC_P,
        "codons": ["AAC", "AAT"]
    },
    {
        "name": ["aspartic acid", "asp", "D"],
        "side_chain": SC_E_N,
        "codons": ["GAC", "GAT"]
    },
    {
        "name": ["cysteine", "cys", "C"],
        "side_chain": SC_S,
        "codons": ["TGC", "TGT"]
    },
    {
        "name": ["glutamine", "gln", "Q"],
        "side_chain": SC_P,
        "codons": ["CAA", "CAG"]
    },
    {
        "name": ["glutamic acid", "glu", "E"],
        "side_chain": SC_E_N,
        "codons": ["GAA", "GAG"]
    },
    {
        "name": ["glycine", "gly", "G"],
        "side_chain": SC_S,
        "codons": ["GGA", "GGC", "GGG", "GGT"]
    },
    {
        "name": ["histidine", "his", "H"],
        "side_chain": SC_E_P,
        "codons": ["CAC", "CAT"]
    },
    {
        "name": ["isoleucine", "ile", "I"],
        "side_chain": SC_H,
        "codons": ["ATA", "ATC", "ATT"]
    },
    {
        "name": ["leucine", "leu", "L"],
        "side_chain": SC_H,
        "codons": ["CTA", "CTC", "CTG", "CTT", "TTA", "TTG"]
    },
    {
        "name": ["lysine", "lys", "K"],
        "side_chain": SC_E_P,
        "codons": ["AAA", "AAG"]
    },
    {
        "name": ["methionine", "met", "M"],
        "side_chain": SC_H,
        "codons": ["ATG"]
    },
    {
        "name": ["phenylalanine", "phe", "F"],
        "side_chain": SC_H,
        "codons": ["TTC", "TTT"]
    },
    {
        "name": ["proline", "pro", "P"],
        "side_chain": SC_S,
        "codons": ["CCA", "CCC", "CCG", "CCT"]
    },
    {
        "name": ["serine", "ser", "S"],
        "side_chain": SC_P,
        "codons": ["AGC", "AGT", "TCA", "TCC", "TCG", "TCT"]
    },
    {
        "name": ["threonine", "thr", "T"],
        "side_chain": SC_P,
        "codons": ["ACA", "ACC", "ACG", "ACT"]
    },
    {
        "name": ["tryptophan", "trp", "W"],
        "side_chain": SC_H,
        "codons": ["TGG"]
    },
    {
        "name": ["tyrosine", "tyr", "Y"],
        "side_chain": SC_H,
        "codons": ["TAC", "TAT"]
    },
    {
        "name": ["valine", "val", "V"],
        "side_chain": SC_H,
        "codons": ["GTA", "GTC", "GTG", "GTT"]
    }
];